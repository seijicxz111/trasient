<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejour</title>
    <link rel="stylesheet" href="style.css">
    <script src="login.js" defer></script>
    <script src="script.js" defer></script>
    <script src="filter.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <!-- Header Section -->
    <header>
    <div class="logo-container">
        <img src="assets/logo.jpg" alt="logo" class="logo">
        <div class="title">Sejour</div>
    </div>
        <div class="search-bar">
            <input type="text" placeholder="Search destinations">
            <div class="search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </div>
        </div>
        <div class="button-container">
            <button class="btn login-btn" onclick="openModal('login-modal')">Log In</button>
        </div>
    </header>


    <div id="login-modal" class="modal login-modal">
        <div class="form-container">
            <p class="title">Log In or Sign Up</p>
            <form class="form">
                <input type="text" class="input" name="phone" placeholder="(+63) XXX-XXXX" maxlength="11" required>
                <input type="tel" class="input" placeholder="Password">
                <p class="agreement">
                    <span class="agreement-label">We'll call or text you to confirm your number.
                        Standard message and data rates apply.<br>Privacy Policy</span>
                </p>
                <button class="form-btn">Continue</button>
            </form>
            <p class="or">or</p>
            <div class="buttons-container">
                <div class="apple-login-button">
                    <span>Log in with Apple</span>
                </div>
                <div class="google-login-button">
                    <span>Log in with Google</span>
                </div>
                <div class="facebook-login-button">
                    <span>Log in with Facebook</span>
                </div>
            </div>
        </div>
    </div>


    <div class="menu">
        <nav class="tabs">
            <button class="tab-button">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>

            <div class="tab">
                <span class="material-symbols-outlined">local_fire_department</span>
                <span class="icon-label">Trending</span>
            </div>

            <div class="tab">
                <span class="material-symbols-outlined">bed</span>
                <span class="icon-label">Rest</span>
            </div>

            <div class="tab">
                <span class="material-symbols-outlined">villa</span>
                <span class="icon-label">Tiny home</span>
            </div>

            <div class="tab">
                <span class="material-symbols-outlined">waves</span>
                <span class="icon-label">Beach</span>
            </div>

            <div class="tab">
                <span class="material-symbols-outlined">cabin</span>
                <span class="icon-label">Cabin</span>
            </div>

            <button class="tab-button">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>

            <div class="filter-tab">
                <button class="filter-btn">
                    <span id="fltr" class="material-symbols-outlined">tune</span>
                    Filters
                </button>
            </div>
        </nav>
    </div>


    <div class="popup-overlay" id="filter-popup">
        <div class="popup">
            <div class="price-range">
                <h3>Price Range</h3>
                <div class="slider-container">
                    <div class="range-track"></div>
                    <input type="range" id="min-range" min="1" max="10000" value="1" step="1">
                    <input type="range" id="max-range" min="1" max="10000" value="10000" step="1">
                </div>
                <div class="range-values">
                    <span id="min-value">₱1</span>
                    <span id="max-value">₱10000</span>
                </div>
            </div>
            <hr>
            <div class="rooms-beds">
                <h3>Rooms and beds</h3>
                <div class="counter">
                    <label>Bedrooms</label>
                    <div>
                        <button>-</button>
                        <span>0</span>
                        <button>+</button>
                    </div>
                </div>
                <div class="counter">
                    <label>Beds</label>
                    <div>
                        <button>-</button>
                        <span>0</span>
                        <button>+</button>
                    </div>
                </div>
                <div class="counter">
                    <label>Bathrooms</label>
                    <div>
                        <button>-</button>
                        <span>0</span>
                        <button>+</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="amenities">
                <h3>Amenities</h3>
                <div class="amenity-buttons">
                    <button><img src="assets/wifi.svg" alt="Wi-Fi"></button>
                    <button><img src="assets/kitchen.svg" alt="Kitchen"></button>
                    <button><img src="assets/washer.svg" alt="Washer"></button>
                    <button><img src="assets/dryer.svg" alt="Dryer"></button>
                    <button><img src="assets/ac.svg" alt="Air Conditioning"></button>
                    <button><img src="assets/garage.svg" alt="Garage"></button>
                    <button><img src="assets/smoking.svg" alt="Smoking"></button>
                    <button><img src="assets/tv.svg" alt="Tv"></button>
                </div>
            </div>

            <div class="filter-actions">
                <button id="clear-filters" class="filter-btn secondary">Clear all</button>
                <button id="apply-filters" class="filter-btn primary">Apply</button>
            </div>
        </div>
    </div>

    <section class="cards-container">

        <div class="card">
            <img src="assets/image1.jpg" alt="Beachfront">
            <div class="card-info">
                <h3>Beachfront</h3>
                <p class="location">Baguio City, Philippines</p>
                <p class="price">₱6,200 / night</p>
                <div class="card-details">
                    <span><i class="bi bi-star-fill"></i> 4.8</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="assets/image1.jpg" alt="Beachfront">
            <div class="card-info">
                <h3>Beachfront</h3>
                <p class="location">Baguio City, Philippines</p>
                <p class="price">₱6,200 / night</p>
                <div class="card-details">
                    <span><i class="bi bi-star-fill"></i> 4.8</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="assets/image1.jpg" alt="Beachfront">
            <div class="card-info">
                <h3>Beachfront</h3>
                <p class="location">Baguio City, Philippines</p>
                <p class="price">₱6,200 / night</p>
                <div class="card-details">
                    <span><i class="bi bi-star-fill"></i> 4.8</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="assets/image1.jpg" alt="Beachfront">
            <div class="card-info">
                <h3>Beachfront</h3>
                <p class="location">Baguio City, Philippines</p>
                <p class="price">₱6,200 / night</p>
                <div class="card-details">
                    <span><i class="bi bi-star-fill"></i> 4.8</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="assets/image1.jpg" alt="Beachfront">
            <div class="card-info">
                <h3>Beachfront</h3>
                <p class="location">Baguio City, Philippines</p>
                <p class="price">₱6,200 / night</p>
                <div class="card-details">
                    <span><i class="bi bi-star-fill"></i> 4.8</span>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="assets/image1.jpg" alt="Beachfront">
            <div class="card-info">
                <h3>Beachfront</h3>
                <p class="location">Baguio City, Philippines</p>
                <p class="price">₱6,200 / night</p>
                <div class="card-details">
                    <span><i class="bi bi-star-fill"></i> 4.8</span>
                </div>
            </div>
        </div>
      
    </section>

    <footer>
        <?php include("footer.php") ?>
    </footer>
</body>
</html>