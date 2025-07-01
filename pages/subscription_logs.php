<?php 
include __DIR__ . '/../includes/head.php';
?>






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
