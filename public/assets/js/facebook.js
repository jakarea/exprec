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

searchButton.addEventListener('click', function (e) {
    e.preventDefault();

    // search_type = document.getElementById("search_type").value;
    // search_terms = document.getElementById("search_terms").value;
    // publisher_platforms = document.getElementById("publisher_platforms").value;
    // media_type = document.getElementById("media_type").value;
    // languages = document.getElementById("languages").value;
    // ad_reached_countries = document.getElementById("ad_reached_countries").value;
    // ad_active_status = document.getElementById("ad_active_status").value;
    // ad_delivery_date_min = document.getElementById("ad_delivery_date_min").value;
    // ad_delivery_date_max = document.getElementById("ad_delivery_date_max").value;
    // search_page_ids = document.getElementById("search_page_ids").value;

    // _sex = document.getElementById("_sex").value;
    // _cta_type = document.getElementById("_cta_type").value;
    // _creation_date_start = document.getElementById("_creation_date_start").value;
    // _creation_date_end = document.getElementById("_creation_date_end").value;
    // _first_seen_start = document.getElementById("_first_seen_start").value;
    // _first_seen_end = document.getElementById("_first_seen_end").value;
    // _last_seen_start = document.getElementById("_last_seen_start").value;
    // _last_seen_end = document.getElementById("_last_seen_end").value;

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

function makeAjaxRequest() {
    isLoading = true;
    adContainerPreloader.classList.remove("d-none");
    let fields = ["search_type", "search_terms", "publisher_platforms", "media_type", "languages", "ad_reached_countries", "ad_active_status", "ad_delivery_date_min", "ad_delivery_date_max", "search_page_ids", "_sex", "_cta_type", "_creation_date_start", "_creation_date_end", "_first_seen_start", "_first_seen_end", "_last_seen_start", "_last_seen_end"];
    let jsonData = createJsonFromFields(fields);
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
                                    <div class="wining-product-thumbnail">
                                        <img id="img_${ad.id}" src="${baseUrl}/assets/images/preloader2.gif" alt="${title}" class="img-fluid main-img">
                                        <img id="player_${ad.id}"src="${baseUrl}/assets/images/play-icon.png" alt="Line" class="img-fluid player-img d-none">
                                    </div>
                                    <div class="wining-product-txt">
                                        <h5>${title}</h5>
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
                                            <a href="#" data-id="${i}" data-select='${JSON.stringify(ad)}' class="saveAdToList preventDefault">Add to a list</a>
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
            let [image, video_image, video_url] = ['', '', ''];
            if (images.length) {
                image = images[0].resized_image_url;
            }
            if (videos.length || cards.length) {
                const {
                    video_preview_image_url,
                    video_hd_url
                } = videos.length ? videos[0] : (cards.length ? cards[0] : {});
                video_image = video_preview_image_url || '';
                video_url = video_hd_url || '';
                if (!images.length && cards.length) {
                    image = cards[0].resized_image_url;
                }
            }

            let myImg = document.getElementById("img_" + id);
            let myPlayer = document.getElementById("player_" + id);

            if (video_image) {
                myImg.src = video_image;
                myPlayer.classList.remove("d-none");
            }

            if (image) {
                myImg.src = image;
            }
        }
    } catch (error) {
        console.error(error);
    }
}

const adspyModal = document.getElementById("adspy-modal");
const closeAdspyModal = document.getElementById("close-adspy-modal");
const setAdId = document.getElementById("ad-data");

const closeModal = () => {
    adspyModal.style.display = "none";
}

closeAdspyModal.addEventListener("click", closeModal);

document.addEventListener('click', function (event) {
    if (event.target.classList.contains('preventDefault')) {
        event.preventDefault();
        let save = 0;
        // Get data-id attribute from clicked element
        var adId = event.target.getAttribute('data-id');
        if (event.target.classList.contains('saveAdToList')) {
            save = 1;
            adspyModal.style.display = "block";
            adData.value = JSON.stringify(savedAds[adId]);
        }
        if (event.target.classList.contains('saveAdAndOpen')) {
            save = 0;
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
        if (!addToList) {
            window.open(baseUrl + '/adspy/facebook/' + data.ad_id, '_blank');
        }
    } catch (error) {
        console.error(error);
    }
});

async function saveAd(adId, addToList = false) {
    const mergedAd = Object.assign({}, savedAds[adId], savedAdsContent[adId], { addToList });

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