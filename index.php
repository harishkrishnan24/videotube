<!DOCTYPE html>
<html>
    <head>
        <title>Video Tube</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <script src="assets/js/commonActions.js"></script>
    </head>
    <body>
        <div id="pageContainer">
            <div id="mastHeadContainer">
                <button class="navShowHide">
                    <img src="assets/images/icons/menu.png" />
                </button>
                <a class="logoContainer" href="index.php">
                    <img src="assets/images/icons/VideoTubeLogo.png" title="Logo" alt="Site logo" />
                </a>
                <div class="searchBarContainer">
                    <form action="search.php" method="GET">
                        <input type="text" class="searchBar" name="term" placeholder="Search..." />
                        <button class="searchButton">
                            <img src="assets/images/icons/search.png" />
                        </button>
                    </form>
                </div>
            </div>
            <div id="sideNavContainer" style="display: none;">
                SideNav
            </div>
            <div id="mainSectionContainer">
                <div id="mainContentContainer">Main Content</div>
            </div>
        </div>
    </body>
</html>