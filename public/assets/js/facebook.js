const baseUrl = document.querySelector('meta[name="base-url"]').getAttribute('content');
const projectForm = document.getElementById('projectForm');

var searchButton = document.getElementById("searchBtn");
var adsDiv = document.getElementById("ad-container");
var adContainerPreloader = document.getElementById("ad-container-preloader");
var isLoading = false;
var nextPage = '';
var ads = [];
var ids = [];
var search_terms = '';
var htmlAds = ''
var i = 0;
var savedAds = [];
var savedAdsContent = [];
var saveAdAndOpenElements = document.querySelectorAll('.saveAdAndOpen');
var adData = document.getElementById('adData');
const adspyModal = document.getElementById("adspy-modal");
const closeAdspyModal = document.getElementById("close-adspy-modal");
const setAdId = document.getElementById("ad-data");
const queryButtons = document.querySelectorAll('.quick-query-item');
const closeModal = () => {
    adspyModal.style.display = "none";
}
const saveCurrentQuery = document.getElementById('saveCurrentQuery');
const dateFields = ['ad_delivery_date_min', '_first_seen_start', '_first_seen_end', '_last_seen_start', '_last_seen_end', '_creation_date_start', '_creation_date_end'];
const dateRegex = /^\d{4}-\d{2}-\d{2}$/;

function validateDateInput(dateStr) {
    return dateRegex.test(dateStr);
}

searchButton.addEventListener('click', function (e) {
    e.preventDefault();
    if (document.getElementById("search_terms").value == '') {
        return;
    }
    dateFields.forEach(function (field) {
        let inputFiled = document.getElementById(field)
        inputFiled.style = "border: 0px";
        const userInput = inputFiled.value;  // replace with appropriate method to get user input
        if (userInput == '')
            return true;
        if (!validateDateInput(userInput)) {
            inputFiled.style = "border: 1px solid red";
            inputFiled.style = "border-radius: 3px";
            inputFiled.style = "padding: 3px";
            return false;
        }
    });
    nextPage = ''; // Clear the pagination
    //document.getElementById("search_terms").value = '';
    adsDiv.innerHTML = '';
    makeAjaxRequest();
});

function loadMoreData() {
    if (isLoading) {
        return;
    }
    if (!search_terms && !nextPage) {
        return;
    }
    isLoading = true;
    adContainerPreloader.classList.remove("d-none");
    setTimeout(() => {
        makeAjaxRequest();
    }, 2000);
}


document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener('scroll', function () {
        if (window.innerHeight + window.scrollY + 1 >= document.body.offsetHeight) {
            loadMoreData();
        }
    });
});
function getDayDiff(start_date, stop_date) {
    var startDate = new Date(start_date);
    var stopDate = stop_date ? new Date(stop_date) : new Date();
    var timeDiff = stopDate.getTime() - startDate.getTime();
    var dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
    return dayDiff + 1;
}

function humanReadableFormat(num) {
    if (num >= 1000000) {
        return (num / 1000000).toFixed(1) + 'M';
    }
    if (num >= 1000) {
        return (num / 1000).toFixed(1) + 'K';
    }
    return num;
}

function getDateFormated(dateStr) {
    var date = new Date(dateStr);
    var formattedDate = date.toLocaleDateString('en-US', {
        day: 'numeric',
        month: 'short',
        year: 'numeric'
    });
    return formattedDate;
}

function createJsonFromFields(fields) {
    let data = {
        nextPage: nextPage,
    };
    fields.forEach(function (field) {
        let fieldValue = document.getElementById(field).value;
        if (fieldValue) {
            data[field] = fieldValue;
        }
    });
    return data;
}

function makeAjaxRequest(query = '') {
    isLoading = true;
    adContainerPreloader.classList.remove("d-none");
    let fields = ["search_type", "search_terms", "publisher_platforms", "media_type", "languages", "ad_reached_countries", "ad_active_status", "ad_delivery_date_min", "ad_delivery_date_max", "search_page_ids", "_sex", "_cta_type", "_creation_date_start", "_creation_date_end", "_first_seen_start", "_first_seen_end", "_last_seen_start", "_last_seen_end"];
    let jsonData = '';
    if (query == '') {
        jsonData = createJsonFromFields(fields);
    } else {
        jsonData = JSON.parse(query);
        setFormFieldsData(fields, jsonData)
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: baseUrl + '/adspy/load-more-data',
        type: 'GET',
        data: jsonData,
        success: function (data) {
            search_terms = '';
            nextPage = data.nextPage
            ads = data.ads
            isLoading = false;
            adContainerPreloader.classList.add("d-none");
            htmlAds = ''
            let title = ''

            if (ads.length === 0) {
                adsDiv.insertAdjacentHTML('beforeend', `<p class="col-12 text-center no-more-ads">The available ads seems to have reached its end, with no more left to access.</p>`);
                return;
            }

            ads.forEach(function (ad) {
                ids.push(ad.id);
                savedAds.push(ad)
                title = ad.ad_creative_link_titles ? ad.ad_creative_link_titles[0] : ''
                htmlAds += `<div class="col-lg-4 col-md-6 col-sm-6" id="ad_${ad.id}">
                                <div class="wining-product-item adspy-filter-product">
                                    <div class="wining-product-thumbnail" id="image_${ad.id}">
                                        <img id="img_${ad.id}" src="${baseUrl}/assets/images/preloader2.gif" alt="${title}" class="img-fluid main-img">
                                    </div>

                                    <div class="wining-product-thumbnail d-none" id="video_div_${ad.id}">
                                        <video id="player_${ad.id}" controlslist="nodownload" height="100%" loop="" poster=""  width="100%" controls="">
                                            <source id="source_${ad.id}" src="" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="wining-product-txt">
                                        <h5>${title.substring(0, 25)}</h5>
                                        <h3>${getDayDiff(ad.ad_delivery_start_time, ad.ad_delivery_stop_time)} Days</h3>
                                        <ul>
                                        <li><a href="#"><img src="${baseUrl}/assets/images/tag-icon.svg" alt="Comment" class="img-fluid"> ${ad.estimated_audience_size && ad.estimated_audience_size.lower_bound ? humanReadableFormat(ad.estimated_audience_size.lower_bound) : ''}</a></li>
                                        <li><a href="#"><img src="${baseUrl}/assets/images/pin-icon.svg" alt="Comment" class="img-fluid"> ${ad.impressions && ad.impressions.lower_bound ? humanReadableFormat(ad.impressions.lower_bound) : ''}</a></li>
                                        </ul>
                                        <table>
                                            <tr>
                                                <td><img src="${baseUrl}/assets/images/calendar-clr-icon.svg" alt="Comment" class="img-fluid"> First Seen</td>
                                                <td>${getDateFormated(ad.ad_delivery_start_time)}</td>
                                            </tr>
                                            <tr>
                                                <td><img src="${baseUrl}/assets/images/calendar-clr-icon.svg" alt="Comment" class="img-fluid"> Last Seen</td>
                                                <td>${ad.ad_delivery_stop_time ? getDateFormated(ad.ad_delivery_stop_time) : ''}</td>
                                            </tr>
                                        </table> 
                                        <div class="adspy-filter-product-bttns">
                                            <a href="#" data-id="${i}" class="saveAdAndOpen preventDefault">See ad details</a>
                                            <a href="#" data-id="${i}" class="saveAdToList preventDefault">Add to a list</a>
                                        </div>
                                    </div>
                                </div>
                            </div>`
                i++;
            })

            adsDiv.insertAdjacentHTML('beforeend', htmlAds);
            getImagesByIds(ids);
            // $('.row').masonry({
            //     percentPosition: true
            // });

        },
        error: function (xhr, status, error) {
            console.error(error);
            isLoading = false;
            adContainerPreloader.classList.remove("d-none");
        }
    })
}

async function getImagesByIds(ids) {
    try {
        while (ids.length > 0) {
            const id = ids.shift();
            const url = baseUrl + '/adspy/scrapAdBy/' + id;
            const data = await $.ajax({
                url,
                type: 'GET'
            });

            const {
                images,
                videos,
                cards
            } = data;
            savedAdsContent.push(data);
            let [video_hd_url, video_sd_url, video_preview_image_url, image, video_url] = ['', '', '', ''];

            if (images && images.length) {
                image = images[0].resized_image_url;
            }

            if (videos && videos.length) {
                video_hd_url = videos[0].video_hd_url;
                video_sd_url = videos[0].video_sd_url;
                video_preview_image_url = videos[0].video_preview_image_url;
                video_url = video_hd_url || video_sd_url || '';
            }

            if (cards && cards.length) {
                video_preview_image_url = cards[0].video_preview_image_url || '';
                video_url = cards[0].video_hd_url || cards[0].video_sd_url || '';
                if (!images.length) {
                    image = cards[0].resized_image_url;
                }
            }
            let myImg = document.getElementById("img_" + id);
            let myImage = document.getElementById("image_" + id);
            let myPlayer = document.getElementById("player_" + id);
            let mySource = document.getElementById("source_" + id);
            let video_div = document.getElementById("video_div_" + id);

            if (video_preview_image_url) {
                video_div.classList.remove("d-none");
                myImage.classList.add("d-none");
                myPlayer.poster = video_preview_image_url;
                mySource.src = video_url;
                myPlayer.load()
            }

            if (image) {
                myImg.src = image;
            }
            if (!image && !video_preview_image_url) {
                myImage.classList.add("d-none");
                myImg.classList.add("d-none");
            }
        }
    } catch (error) {
        console.error(error);
    }
}

closeAdspyModal.addEventListener("click", closeModal);

document.addEventListener('click', function (event) {
    if (event.target.classList.contains('preventDefault')) {
        event.preventDefault();
        // Get data-id attribute from clicked element
        var adId = event.target.getAttribute('data-id');
        const mergedAd = Object.assign({}, savedAds[adId], savedAdsContent[adId]);
        let save = false;
        if (event.target.classList.contains('saveAdToList')) {
            adspyModal.style.display = "block";
            adData.value = JSON.stringify(mergedAd);
            save = true;
        }
        if (event.target.classList.contains('saveAdAndOpen')) {
            saveAd(adId, save)
        }
    }
});

projectForm.addEventListener('submit', async function (event) {
    event.preventDefault();
    let project_id = document.getElementById("project_id").value;
    let project_name = document.getElementById("project_name").value;
    let adData = JSON.parse(document.getElementById("adData").value);

    try {
        const url = baseUrl + '/adspy/facebook2/save-ad2/save-project';
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify({ project_id, project_name, adData })
        });
        const data = await response.json();

        if (data) {
            let status = data[1];
            let projects = data[0];
            document.getElementById("project_name").value = '';
            closeModal();
            project_id = '';
            project_name = '';
            adData = '';
            var selectElement = document.getElementById("project_id");
            toastr["success"]("Added to project", "Success!")
            // Remove all existing options
            selectElement.innerHTML = "";
            let option = new Option('Select Below', '');
            selectElement.add(option);
            projects.forEach(project => {
                let option = new Option(project.name, project.id);
                selectElement.add(option);
            })
        }
    } catch (error) {
        console.error(error);
    }
});

async function saveAd(adId, addToList) {
    const mergedAd = Object.assign({}, savedAds[adId], savedAdsContent[adId]);

    try {
        const url = baseUrl + '/adspy/facebook2/save-ad2/yes';
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify(mergedAd)
        });
        const data = await response.json();
        if (!addToList) {
            window.open(baseUrl + '/adspy/facebook/' + data.ad_id, '_blank');
        }
    } catch (error) {
        console.error(error);
    }
}

saveCurrentQuery.addEventListener('click', async function (event) {
    let fields = ["search_type", "search_terms", "publisher_platforms", "media_type", "languages", "ad_reached_countries", "ad_active_status", "ad_delivery_date_min", "ad_delivery_date_max", "search_page_ids", "_sex", "_cta_type", "_creation_date_start", "_creation_date_end", "_first_seen_start", "_first_seen_end", "_last_seen_start", "_last_seen_end"];
    let jsonData = createJsonFromFields(fields);
    if (jsonData.search_terms == null) {
        return;
    }
    jsonData.nextPage = '';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: baseUrl + '/adspy/facebook2/save-ad2/save-current-query',
        type: 'POST',
        data: jsonData,
        success: function (data) {
            toastr["success"]("Query saved", "Success!")
        }
    });
});




// Loop through all buttons and add click event listener to each of them
queryButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        const query = button.getAttribute('data-query');
        makeAjaxRequest(query);
    });
});

function setFormFieldsData(fields, jsonData) {

    const keys = Object.keys(jsonData);

    // Retrieve values using Object.values()
    const values = Object.values(jsonData);

    fields.forEach(function (field) {
        let element = document.getElementById(field);
        element.value = jsonData[field] ? jsonData[field] : '';
    })
}