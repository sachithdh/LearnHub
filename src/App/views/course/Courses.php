<?php include $this->resolve("partials/_header.php"); ?>

<section class="course-result-container">
    <div class="left-course-container">
        <div class="search-container">
            <input type="text" class="search-bar" placeholder="Search for courses...">
        </div>
        <div class="filters">
            <h3>Filters</h3>
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
                    <label><input type="checkbox"> New York</label>
                    <label><input type="checkbox"> Los Angeles</label>
                    <label><input type="checkbox"> Chicago</label>
                    <label><input type="checkbox"> Houston</label>
                </div>
            </div>
            <div class="filter-section">
                <h4>Price Range</h4>
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
                        <p class="course-rating">Rating: 4.5 stars</p>
                        <p>Location: Colombo | Price: Rs. 24,500</p>
                    </div>
                </div>
            </a>
            <a href="/course/course-info">
                <div class="search-course-card">
                    <img src="/assets/images/dataSci.png" alt="Python Programming" class="course-image">
                    <div class="course-info">
                        <h4>Advanced Python Programming</h4>
                        <p>Master advanced Python concepts and techniques.</p>
                        <p class="course-rating">Rating: 4.8 stars</p>
                        <p>Location: Nugegoda | Price: Rs. 12,000</p>
                    </div>
                </div>

            </a>
            <a href="/course/course-info">
                <div class="search-course-card">
                    <img src="/assets/images/intro-to-web.jpg" alt="Data Science" class="course-image">
                    <div class="course-info">
                        <h4>Data Science Fundamentals</h4>
                        <p>Introduction to data analysis and machine learning.</p>
                        <p class="course-rating">Rating: 4.2 stars</p>
                        <p>Location: Matara | Price: Rs. 10,000</p>
                    </div>
                </div>
            </a>
            <a href="/course/course-info">
                <div class="search-course-card">
                    <img src="/assets/images/dm.jpg" alt="Web Development" class="course-image">
                    <div class="course-info">
                        <h4>Introduction to Web Development</h4>
                        <p>Learn the basics of HTML, CSS, and JavaScript.</p>
                        <p class="course-rating">Rating: 4.5 stars</p>
                        <p>Location: Kandy | Price: Rs.15 000</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>