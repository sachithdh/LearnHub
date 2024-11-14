<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Resource/resource.css">

</head>

<section class="course-result-container">
    <div class="left-course-container">
        <div class="search-container">
            <input type="text" class="search-bar" placeholder="Search for courses...">
        </div>
        <div class="filters">
            <h3>Filters</h3>
            <div class="filter-section">
                <h4>Resource Type</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox"> Articles</label>
                    <label><input type="checkbox"> Videos</label>
                    <label><input type="checkbox"> Tutorials</label>
                    <label><input type="checkbox"> Projects</label>
                </div>
            </div>
            <div class="filter-section">
                <h4>Subject Area</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox"> Web Development</label>
                    <label><input type="checkbox"> Data Science</label>
                    <label><input type="checkbox"> Machine Learning</label>
                    <label><input type="checkbox"> Mobile Development</label>
                </div>
                <div class="filter-section">
                    <h4>Level</h4>
                    <div class="checkbox-group">
                        <label><input type="checkbox"> Beginner</label>
                        <label><input type="checkbox"> Intermediate</label>
                        <label><input type="checkbox"> Advanced</label>
                    </div>
                </div>
            </div>
            <div class="filter-section">
                <h4>Price Range</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox"> Free</label>
                    <label><input type="checkbox"> Paid</label>
                </div>
                <div class="price-range">
                    <input type="number" placeholder="Min">
                    <input type="number" placeholder="Max">
                </div>
            </div>
        </div>
    </div>
    <div class="right-course-container">
        <div class="results">
            <!-- <h3>Search Results</h3> -->
            <a href="/course/course-info">

                <div class="search-course-card">
                    <img src="/assets/images/dm.jpg" alt="Web Development" class="course-image">
                    <div class="course-info">
                        <h4>Introduction to Web Development</h4>
                        <p>Learn the basics of HTML, CSS, and JavaScript.</p>
                        <p class="course-rating">Subject: Physics</p>
                        <p>Type: Video | Price: Rs. 24,500</p>
                    </div>
                </div>
            </a>
            <a href="/course/course-info">
                <div class="search-course-card">
                    <img src="/assets/images/dataSci.png" alt="Python Programming" class="course-image">
                    <div class="course-info">
                        <h4>Advanced Python Programming</h4>
                        <p>Master advanced Python concepts and techniques.</p>
                        <p class="course-rating">Subject: ICT</p>
                        <p>Type: Book | Free</p>
                    </div>
                </div>

            </a>
            <a href="/course/course-info">
                <div class="search-course-card">
                    <img src="/assets/images/intro-to-web.jpg" alt="Data Science" class="course-image">
                    <div class="course-info">
                        <h4>Data Science Fundamentals</h4>
                        <p>Introduction to data analysis and machine learning.</p>
                        <p class="course-rating">Subject: Technology</p>
                        <p>Type: Artical | Free</p>
                    </div>
                </div>
            </a>
            <a href="/course/course-info">
                <div class="search-course-card">
                    <img src="/assets/images/dm.jpg" alt="Web Development" class="course-image">
                    <div class="course-info">
                        <h4>Introduction to Web Development</h4>
                        <p>Learn the basics of HTML, CSS, and JavaScript.</p>
                        <p class="course-rating">Subject: Mathematics</p>
                        <p>Type: Book | Price: Rs.15 000</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>