<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Course Module</title>
</head>
<body>
    <section>
        <h2 class="title"></h2>
        <div class="container">
            <div id="video_player">
                <video controls id="main-Video" src=""></video>
            </div>
            <div class="playlistBx">
                <div class="header">
                    <div class="row">
                        <span class="AllLessons"></span>
                    </div>
                    <input type="text" name="" id="searchInput" placeholder="Type Something ...."> 
                </div>
                <ul class="playlist" id="playlist">
                </ul>
            </div>
        </div>
    </section>
    <script src="video-list.js"></script>
    <script src="script.js"></script>
    <script>
        const searchInput = document.getElementById("searchInput");  
        searchInput.addEventListener("input", function() {
          const searchValue = searchInput.value.toLowerCase();
          for (const li of playlist.children) {
            const span = li.querySelector("span");
            const spanText = span.textContent;
            const spanTextLower = spanText.toLowerCase();
            const startIndex = spanTextLower.indexOf(searchValue);
            if (startIndex === -1) {
              li.style.display = "none";
            } else {
              li.style.display = "";
              span.innerHTML =
                spanText.slice(0, startIndex) +
                "<mark>" +
                spanText.slice(startIndex, startIndex + searchValue.length) +
                "</mark>" +
                spanText.slice(startIndex + searchValue.length);
            }
          }
        });
        
    </script>
</body>
</html>