<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Course/courses.css">

</head>

<section class="courses-container">
    <div class="search-container">
        <input type="text" class="course-search-bar" placeholder="Search for courses...">
        <button class="course-search-button"><i class="fas fa-search"></i>
        </button>
        <select name="search-by" class="search-by">
            <option value="">Search By</option>
            <option value="course">Course</option>
            <option value="tutor">Tutor</option>
        </select>
    </div>
    <div class="course-result-container">
        <div class="left-course-container">
            <div class="filter-section">

                <div class="filters">
                    <h3>Filters</h3>
                    <div class="date-updated" onclick="showDate()">
                        <h4>Date Updated <i class="fas fa-chevron-down chevron-icon"></i></h4>
                        <div class="date-dropdown">
                            <label><input type="radio" name="updated_date"> Last Day</label>
                            <label><input type="radio" name="updated_date"> Last Week</label>
                            <label><input type="radio" name="updated_date"> Last Month</label>
                            <label><input type="radio" name="updated_date"> Last Year</label>
                            <label><input type="radio" name="updated_date"> Any Time</label>
                        </div>
                    </div>
                    <div class="filter-section">
                        <h4>Ratings</h4>
                        <div class="checkbox-group">
                            <label><input type="checkbox"> 5 stars</label>
                            <label><input type="checkbox"> 4 stars & up</label>
                            <label><input type="checkbox"> 3 stars & up</label>
                        </div>
                    </div>
                    <div class="filter-section">
                        <h4>Location</h4>
                        <div class="checkbox-group">
                            <label><input type="checkbox"> Colombo</label>
                            <label><input type="checkbox"> Kandy</label>
                            <label><input type="checkbox"> Gampaha</label>
                            <label><input type="checkbox"> Matara</label>
                        </div>
                    </div>
                    <div class="filter-section">
                        <h4>Price Range</h4>
                        <div class="price-range">
                            <input type="number" placeholder="Min">
                            <input type="number" placeholder="Max">
                        </div>
                    </div>
                    <div class="filter-btn">
                        <button>Apply Filters</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-course-container">
            <div class="results">
                <!-- <h3>Search Results</h3> -->
                <!-- ..................... -->
                <div class="search-course-card">
                    <div class="course-card-header">
                        <img src="/assets/images/dm.jpg" alt="Web Development" class="course-image">
                        <h4 class="course-title">Introduction to Web Development</h4>
                        <hr class="course-card-line" />
                    </div>
                    <div class="course-description">

                        <p>Learn the basics of HTML, CSS, and JavaScript. Lorem ipsum dolor sit amet, </p>
                    </div>
                    <div class="course-info">
                        <div class="course-stat">
                            <p>
                                <i class="fa fa-star icon"></i> 4.5
                            </p>
                            <p>
                                <i class="fa fa-map-marker icon"></i>
                                Colombo
                            </p>
                            <p class="price">
                                Rs. 1,500/Day
                            </p>
                        </div>
                        <div class="course-meta">
                            <div class="course-teacher">
                                <img src="/assets/images/user.jpeg" alt="teacher" />
                                <p>Isuru Naveen</p>
                            </div>
                            <div>
                                <a href="#"> See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-course-card">
                    <div class="course-card-header">
                        <img src="/assets/images/dataSci.png" alt="Web Development" class="course-image">
                        <h4 class="course-title">Introduction to Web Development</h4>
                        <hr class="course-card-line" />
                    </div>
                    <div class="course-description">

                        <p>Learn the basics of HTML, CSS, and JavaScript. Lorem ipsum dolor sit amet, </p>
                    </div>
                    <div class="course-info">
                        <div class="course-stat">
                            <p>
                                <i class="fa fa-star icon"></i> 4.5
                            </p>
                            <p>
                                <i class="fa fa-map-marker icon"></i>
                                Colombo
                            </p>
                            <p class="price">
                                Rs. 2,000/Month
                            </p>
                        </div>
                        <div class="course-meta">
                            <div class="course-teacher">
                                <img src="/assets/images/user.jpeg" alt="teacher" />
                                <p>Isuru Naveen</p>
                            </div>
                            <div>
                                <a href="#"> See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-course-card">
                    <div class="course-card-header">
                        <img src="/assets/images/intro-to-web.jpg" alt="Web Development" class="course-image">
                        <h4 class="course-title">Introduction to Web Development</h4>
                        <hr class="course-card-line" />
                    </div>
                    <div class="course-description">

                        <p>Learn the basics of HTML, CSS, and JavaScript. Lorem ipsum dolor sit amet, </p>
                    </div>
                    <div class="course-info">
                        <div class="course-stat">
                            <p>
                                <i class="fa fa-star icon"></i> 4.5
                            </p>
                            <p>
                                <i class="fa fa-map-marker icon"></i>
                                Colombo
                            </p>
                            <p class="price">
                                Rs. 2,500/Month
                            </p>
                        </div>
                        <div class="course-meta">
                            <div class="course-teacher">
                                <img src="/assets/images/user.jpeg" alt="teacher" />
                                <p>Isuru Naveen</p>
                            </div>
                            <div>
                                <a href="#"> See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-course-card">
                    <div class="course-card-header">
                        <img src="/assets/images/dataSci.png" alt="Web Development" class="course-image">
                        <h4 class="course-title">Introduction to Web Development lore</h4>
                        <hr class="course-card-line" />
                    </div>
                    <div class="course-description">

                        <p>Learn the basics of HTML, CSS, and JavaScript. Lorem ipsum dolor sit amet, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae ut cumque iure sapiente eum illum eos sit iste voluptates facilis voluptate sunt ducimus eligendi molestiae, eaque illo non veniam? Repellendus? </p>
                    </div>
                    <div class="course-info">
                        <div class="course-stat">
                            <p>
                                <i class="fa fa-star icon"></i> 4.5
                            </p>
                            <p>
                                <i class="fa fa-map-marker icon"></i>
                                Colombo
                            </p>
                            <p class="price">
                                Rs. 1,000/Month
                            </p>
                        </div>
                        <div class="course-meta">
                            <div class="course-teacher">
                                <img src="/assets/images/user.jpeg" alt="teacher" />
                                <p>Isuru Naveen</p>
                            </div>
                            <div>
                                <a href="#"> See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-course-card">
                    <div class="course-card-header">
                        <img src="/assets/images/dm.jpg" alt="Web Development" class="course-image">
                        <h4 class="course-title">Introduction to Web Development</h4>
                        <hr class="course-card-line" />
                    </div>
                    <div class="course-description">

                        <p>Learn the basics of HTML, CSS, and JavaScript. Lorem ipsum dolor sit amet, </p>
                    </div>
                    <div class="course-info">
                        <div class="course-stat">
                            <p>
                                <i class="fa fa-star icon"></i> 4.5
                            </p>
                            <p>
                                <i class="fa fa-map-marker icon"></i>
                                Colombo
                            </p>
                            <p class="price">
                                Rs. 24,500/Course
                            </p>
                        </div>
                        <div class="course-meta">
                            <div class="course-teacher">
                                <img src="/assets/images/user.jpeg" alt="teacher" />
                                <p>Isuru Naveen</p>
                            </div>
                            <div>
                                <a href="#"> See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function showDate() {
                const date = document.querySelector(".date-dropdown");
                const chevron = document.querySelector('.chevron-icon');

                date.classList.toggle("show");
                chevron.classList.toggle('rotated');
            }
        </script>
    </div>
</section>