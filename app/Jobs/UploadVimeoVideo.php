<?php

namespace App\Jobs;

use Vimeo\Vimeo;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class UploadVimeoVideo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $lesson;
    protected $path;
    protected $progress;
    public $lessonId;

    public function __construct($lesson)
    {
        // public path to the video file
        $this->lessonId = $lesson->id;
        $this->lesson = $lesson;
        $this->path = public_path($lesson->video_url);
        $this->progress = 0;
    }

    public function handle()
    {
        ini_set('max_execution_time', 120);
        ini_set('memory_limit', '256M');

        try {
            // Upload the video to Vimeo.
            $vimeo = new Vimeo(env('VIMEO_CLIENT_ID'), env('VIMEO_CLIENT_SECRET'), env('VIMEO_ACCESS_TOKEN'));
            
            $uri = $vimeo->upload(
                $this->path,
                [
                    'name' => $this->lesson->title,
                    'description' => $this->lesson->short_description,
                    'privacy' => [
                        'view' => 'anybody'
                    ]
                ],
                function ($progress, $bytes_uploaded, $bytes_total) {
                    // This callback function will be called periodically during the upload.
                    // You can use this to update the upload progress in the job's model.
                    $this->progress = $progress;
                    $this->saveProgress();
                }
            );

            // Unlink the video from our server.
            unlink($this->path);
            
            // Get the video's metadata.
            $video = $vimeo->request($uri . '?fields=uri,name,description,duration,link');

            // Update this lesson video url
            $this->lesson->video_url = $video['body']['link'];
            $this->lesson->save();

            // Get progress of the video upload.
            $this->progress = 100;
            $this->saveProgress();
            
        } catch (\Exception $e) {
            // Log any errors
            \Log::error($e->getMessage());
            \Log::error($e->getTraceAsString());
        }
    }

    public function saveProgress()
    {
        // Store the progress in the job's model.
        $job = $this->getJobInstance();
        if ($job) {
            $job->progress = $this->progress;
            $job->save();
        }
    }

    public function progress()
    {
        return $this->progress;
    }

    private function getJobInstance()
    {
        // Get the job instance from the database.
        $job = \DB::table('jobs')->where('payload', 'like', '%"lessonId":'.$this->lessonId.'%')->first();
        if ($job) {
            return unserialize($job->payload)->lesson;
        }
        return null;
    }
}