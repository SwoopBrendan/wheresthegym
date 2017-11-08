function showSettings() {

    var settingsBlock = document.getElementById("settingsBlock");

    console.log(settingsBlock.style.display);

    if (settingsBlock.style.display === "none") {

        console.log('show');
        settingsBlock.style.display = "block";

    } else {

        console.log('hide');
        settingsBlock.style.display = "none";

    }
}