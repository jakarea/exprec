// save add on details page

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
const closeModal = () => {
    adspyModal.style.display = "none";
}

const saveThisAdd = document.querySelector(".adspy-head-bttn a");
saveThisAdd.addEventListener('click', function (event) {
 
    if (event.target.classList.contains('preventDefault')) {
        event.preventDefault(); 
        let save = 0;
        var adId = event.target.getAttribute('data-id');
        if (event.target.classList.contains('saveAdToList')) {
            save = 1;
            adspyModal.style.display = "block";
            adData.value = JSON.stringify(savedAds[adId]);
        }
    }
});

closeAdspyModal.addEventListener("click", closeModal);

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