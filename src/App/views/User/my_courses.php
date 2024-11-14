<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/User/my-courses.css">
</head>

<section class="courses-page">
    <div class="main-container">
        <div class="main-title">
            <h1>My Courses</h1>
        </div>

        <div class="courses-grid">
            <?php foreach ($myCourses as $courseData): ?>

                <div class="course-card">
                    <div class="course-header">
                        <div class="course-title">
                            <h3><?php echo e($courseData['title']) ?></h3>
                            <p>Grade <?php echo e($courseData['grade_id']) ?></p>
                        </div>
                        <div class="cart-menu">
                            <div class="cart-btn" onclick="toggleCartMenu(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                </svg>
                            </div>
                            <div class="cart-options">
                                <a class="menu-button" href="/manage-course/edit/<?php echo e($courseData['course_id']); ?>">Edit</a>
                                <a href="#" class="menu-button" onclick="showModal()">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <span><?php echo e($courseData['duration']) ?> weeks course</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-calendar"></i>
                            <span><?php echo e($courseData['day']) ?></span>
                        </div>
                        <div class="time-info">
                            <div class="info-item">
                                <i class="fas fa-hourglass-start"></i>
                                <span>Start: <?php echo e($courseData['start_time']) ?></span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-hourglass-end"></i>
                                <span>End: <?php echo e($courseData['end_time']) ?></span>
                            </div>
                        </div>
                        <div class="price-info">
                            <div class="info-item">
                                <i class="fas fa-tag"></i>
                                <span>Rs. <?php echo e($courseData['price']) ?>/<?php echo e($courseData['pricing_period']) ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="course-footer">
                        <button class="details-btn">Details</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Delete confirmation -->

    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Confirm Delete</h3>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button onclick="hideModal()" class="btn btn-cancel">Cancel</button>
                <button onclick="confirmDelete()" class="btn btn-delete">Delete</button>
            </div>
        </div>
    </div>
    <script>
        const modal = document.getElementById('deleteModal');

        function showModal() {
            modal.style.display = 'block';

            // Prevent scrolling of background content
            document.body.style.overflow = 'hidden';
        }

        function hideModal() {
            modal.style.display = 'none';

            // Restore scrolling
            document.body.style.overflow = 'auto';
        }

        function confirmDelete() {
            // Add your delete logic here
            console.log('Item deleted!');
            hideModal();
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target === modal) {
                hideModal();
            }
        }

        // Close modal on escape key press
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && modal.style.display === 'block') {
                hideModal();
            }
        });

        function toggleCartMenu(button) {
            const cartOptions = button.nextElementSibling;
            cartOptions.style.display = cartOptions.style.display === 'block' ? 'none' : 'block';

            // Close the menu if clicked outside
            window.onclick = function(event) {
                if (!button.contains(event.target) && !cartOptions.contains(event.target)) {
                    cartOptions.style.display = 'none';
                }
            }
        }

        function editCourse() {
            alert('Edit course clicked!');
            // Add your edit logic here
        }
    </script>
</section>