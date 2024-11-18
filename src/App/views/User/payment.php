<?php include $this->resolve('partials/_header.php'); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/User/payment.css">
</head>

<section class="payment-container">
    <div class="payment-header">
        <h1>Billing & Payment History</h1>
        <p>View and manage your payment history</p>
    </div>

    <div class="summary-cards">
        <div class="summary-card">
            <h3>Total Spent</h3>
            <div class="value">Rs. 7800.00</div>
        </div>
        <div class="summary-card">
            <h3>Active Courses</h3>
            <div class="value">7</div>
        </div>
        <div class="summary-card">
            <h3>Last Payment</h3>
            <div class="value">Rs. 1900.00</div>
        </div>
    </div>

    <div class="card">
        <div class="filters">
            <input type="text" class="filter-input" id="search" placeholder="Search transactions...">
            <select class="filter-input" id="status-filter">
                <option value="">All Statuses</option>
                <option value="success">Successful</option>
                <option value="pending">Pending</option>
                <option value="failed">Failed</option>
            </select>
            <input type="date" class="filter-input" id="date-filter">
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Transaction ID</th>
                        <th>Course</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Invoice</th>
                    </tr>
                </thead>
                <tbody id="transaction-table">
                    <tr>
                        <td>03/15/2024</td>
                        <td>TRX-789012</td>
                        <td>Advanced Web Development</td>
                        <td>Rs. 1900.00</td>
                        <td><span class="status-badge status-success">Success</span></td>
                        <td><a href="#" class="invoice-link"><i class="fas fa-download"></i> Download</a></td>
                    </tr>
                    <tr>
                        <td>03/10/2024</td>
                        <td>TRX-789011</td>
                        <td>UI/UX Design Basics</td>
                        <td>Rs. 1400.00</td>
                        <td><span class="status-badge status-success">Success</span></td>
                        <td><a href="#" class="invoice-link"><i class="fas fa-download"></i> Download</a></td>
                    </tr>
                    <tr>
                        <td>03/05/2024</td>
                        <td>TRX-789010</td>
                        <td>Digital Marketing Essentials</td>
                        <td>Rs. 2000.00</td>
                        <td><span class="status-badge status-pending">Pending</span></td>
                        <td><a href="#" class="invoice-link"><i class="fas fa-download"></i> Download</a></td>
                    </tr>
                    <tr>
                        <td>02/28/2024</td>
                        <td>TRX-789009</td>
                        <td>Data Science Fundamentals</td>
                        <td>Rs. 2500.00</td>
                        <td><span class="status-badge status-failed">Failed</span></td>
                        <td><a href="#" class="invoice-link"><i class="fas fa-download"></i> Download</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="pagination" id="pagination">
            <button class="page-button">1</button>
            <button class="page-button active">2</button>
            <button class="page-button">3</button>
            <button class="page-button">Next</button>
        </div>
    </div>
</section>

<?php include $this->resolve('partials/_footer.php'); ?>