<?php 
include __DIR__ . '/../includes/head.php';
?>






    <style>
        
        
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
       
        .current-plan {
            background-size: cover;
            padding: 38px 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #9d1686;
            border-radius: 30px;
            margin: 3rem 3rem;
            color: white;
            font-weight: 600;
        }
        .current-plan:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }
        .current-plan h2 {
            margin: 0;
            font-size: 1.75rem;
            color: white;
            font-weight: 700;
        }
        .current-plan p {
            margin: 8px 0;
            font-size: 1.1rem;
        }
        .status-active {
            color: #059669;
            font-weight: 600;
            background: #d1fae5;
            padding: 6px 16px;
            border-radius: 20px;
            display: inline-block;
            text-align: center;
            min-width: 80px;
        }
        .status-expired {
            color: #dc2626;
            font-weight: 600;
            background: #fee2e2;
            padding: 6px 16px;
            border-radius: 20px;
            display: inline-block;
            text-align: center;
            min-width: 80px;
        }
        .upgrade-btn {
            display: block;
            margin: 24px auto;
            padding: 14px 32px;
            background-color: #9d1686;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: fit-content;
            background-size: cover;
        }
        .upgrade-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
        }
        .history-title {
            font-size: 1.5rem;
            color: #9d1686;
            margin: 24px 0 16px;
            font-weight: 600;
        }
        .logs-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            table-layout: fixed;
        }
        .logs-table th, .logs-table td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .logs-table th {
            background: #9d1686;
            color: white;
            font-weight: 600;
        }
        .logs-table th:nth-child(1), .logs-table td:nth-child(1) { width: 25%; }
        .logs-table th:nth-child(2), .logs-table td:nth-child(2) { width: 25%; }
        .logs-table th:nth-child(3), .logs-table td:nth-child(3) { width: 25%; }
        .logs-table th:nth-child(4), .logs-table td:nth-child(4) { width: 25%; text-align: center; }
        .logs-table tr {
            transition: background 0.3s ease;
        }
        .logs-table tr:hover {
            background: #f3f4f6;
        }
        /* Popup Styles */
        div[data-popup] {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        div[data-popup-content] {
            background: white;
            border-radius: 16px;
            padding: 32px;
            width: 90%;
            max-width: 600px;
            animation: popIn 0.4s ease-out;
            position: relative;
            box-shadow: 0 8px 34px rgb(157 22 134 / 38%);
        }
        @keyframes popIn {
            from { opacity: 0; transform: scale(0.85); }
            to { opacity: 1; transform: scale(1); }
        }
        div[data-popup-content] h2 {
            margin: 0 0 24px;
            font-size: 1.75rem;
            color: #9d1686;
            text-align: center;
            font-weight: 700;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        .full-width {
            grid-column: 1 / -1;
        }
        .plan-select, .payment-input {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box;
        }
        .plan-select:focus, .payment-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 8px rgba(59, 130, 246, 0.3);
            outline: none;
        }
        .submit-btn {
            width: 100%;
            padding: 14px;
            background:#9d1686 ;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
        }
        .submit-btn:hover {
            background:  #9d1686;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
        }
        .cancel-btn {
            width: 100%;
            padding: 14px;
            background: #e5e7eb;
            color: #1f2937;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }
        .cancel-btn:hover {
            background: #d1d5db;
            transform: translateY(-2px);
        }
        @media (max-width: 768px) {
            .container {
                margin: 16px;
                padding: 16px;
            }
            h1 {
                font-size: 1.75rem;
            }
            .current-plan h2 {
                font-size: 1.5rem;
            }
            .current-plan p {
                font-size: 0.95rem;
            }
            .logs-table th, .logs-table td {
                font-size: 0.9rem;
                padding: 10px;
            }
            .upgrade-btn {
                font-size: 1rem;
                padding: 12px 24px;
            }
            div[data-popup-content] {
                width: 95%;
                padding: 20px;
            }
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>



<div id="page_box">
        <h1>My Subscription</h1>
        <div class="current-plan" style="background-image: url('<?php echo SITE_URL; ?>assets/images/big_bg.png');">
            <h2>Current Plan: Premium</h2>
            <p>Start Date: 2025-06-01</p>
            <p>End Date: 2025-12-01</p>
            <p class="status-active">Status: Active</p>
        </div>
        <button class="upgrade-btn" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');" onclick="openPopuppaymnent  ()">Upgrade Plan</button>
        <table class="logs-table">
            <thead>
                <tr>
                    <th>Plan</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Premium</td>
                    <td>2025-06-01</td>
                    <td>2025-12-01</td>
                    <td><span class="status-active">Active</span></td>
                </tr>
                <tr>
                    <td>Basic</td>
                    <td>2025-01-01</td>
                    <td>2025-06-30</td>
                    <td><span class="status-expired">Expired</span></td>
                </tr>
            </tbody>
        </table>

    <!-- Popup Form -->
    <div data-popup>
        <div data-popup-content>
            <h2>Upgrade Your Plan</h2>
            <form onsubmit="handleSubmit(event)">
                <div class="form-grid">
                    <div class="full-width">
                        <label for="plan">Select Plan</label>
                        <select name="plan" class="plan-select" required>
                            <option value="" disabled selected>Choose a plan</option>
                            <option value="premium">Premium - $19.99/month</option>
                            <option value="pro">Pro - $29.99/month</option>
                            <option value="enterprise">Enterprise - $49.99/month</option>
                        </select>
                    </div>
                    <div>
                        <label for="card">Card Number</label>
                        <input type="text" name="card" class="payment-input" placeholder="1234 5678 9012 3456" required>
                    </div>
                    <div>
                        <label for="expiry">Expiry Date</label>
                        <input type="text" name="expiry" class="payment-input" placeholder="MM/YY" required>
                    </div>
                    <div>
                        <label for="cvv">CVV</label>
                        <input type="text" name="cvv" class="payment-input" placeholder="123" required>
                    </div>
                    <div class="full-width">
                        <button type="submit" class="submit-btn">Confirm Upgrade</button>
                    </div>
                    <div class="full-width">
                        <button type="button" class="cancel-btn" onclick="closePopup()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openPopuppaymnent() {
            document.querySelector('div[data-popup]').style.display = 'flex';
        }

        function closePopup() {
            document.querySelector('div[data-popup]').style.display = 'none';
        }

        function handleSubmit(event) {
            event.preventDefault();
            const plan = document.querySelector('select[name="plan"]').value;
            alert(`Plan ${plan} selected for upgrade! Payment processing...`);
            closePopup();
        }

        // Close popup when clicking outside
        document.querySelector('div[data-popup]').addEventListener('click', function(event) {
            if (event.target === this) {
                closePopup();
            }
        });
    </script>

</div>


<?php 
include __DIR__ . '/../includes/footer.php';
?>
