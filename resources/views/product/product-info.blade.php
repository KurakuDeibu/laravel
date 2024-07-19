<div class="col-md-4">
    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>Condition:</strong> Lightly Used</li>
        <li class="list-group-item"><strong>Category:</strong> Want a Buyer</li>
        <li class="list-group-item"><strong>Posted By:</strong><a href="#"
                onclick="showUserProfile('Shan Ray'); return false;"> Shan Ray</a></li>
        <li class="list-group-item"><strong>Budget:</strong> ₱20,000</li>
        <li class="list-group-item"><strong>Commission Fee:</strong> ₱1500</li>
        <li class="list-group-item"><strong>Location:</strong> Lapu-Lapu</li>
    </ul>

    <div class="card mb-2">
        <div class="card-body bg-light">
            <h5 class="card-title">Description</h5>
            <p class="card-text">Good as new! Only for 20k, pang gatas lang sa anak...</p>
            <p class="card-text">This Acer Aspire 5 is in excellent condition, barely used. It features a
                powerful Core i5 processor, perfect for everyday tasks and light gaming. The laptop comes
                with its original packaging and all accessories. Don't miss this great deal!</p>
        </div>
    </div>
</div>

<div id="userProfileModal" class="modal"
    style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
    <div class="modal-content"
        style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #007bff; width: 100%; max-width: 400px;">
        <span class="close" onclick="closeUserProfile()"
            style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;">×</span>
        <img src="https://scontent.fceb1-1.fna.fbcdn.net/v/t39.30808-6/323772313_568036805169618_2529956971802637133_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFHAI_q-uhbVU4lhgp3ECGvCzZHbIbey9ALNkdsht7L0CTzU5L45Q5FHQhq0yy4MON_xw_GknAnNvlDN_4t_3a_&_nc_ohc=IUU1KnPTm2MQ7kNvgHNT_mP&_nc_ht=scontent.fceb1-1.fna&oh=00_AYCUfoovsEmw5B6xfRiz_Gf2pPpXtdRR_4UGOfTysAYR8Q&oe=66A0177F" alt="Shan Ray profile picture"
            style="width: 100px; height: 100px; border-radius: 50%; display: block; margin: 0 auto 20px;">
        <h2 style="text-align: center;">Shan Rey</h2>
        <div style="text-align: center; margin-bottom: 20px;">
            <span style="font-size: 24px; color: gold;">★★★★</span>
            <span style="font-size: 24px; color: #ccc;">★</span>
            <p>4.0 out of 5</p>
        </div>
        <button onclick="viewUserListings()"
            style="display: block; width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">View
            Listings</button>
    </div>
</div>

<script>
    function showUserProfile(username) {
        document.getElementById('userProfileModal').style.display = 'block';
    }

    function closeUserProfile() {
        document.getElementById('userProfileModal').style.display = 'none';
    }

    function viewUserListings() {
        // Implement the logic to view user listings
        alert("Viewing Shan Ray's listings");
    }

    // Close the modal if clicked outside of it
    window.onclick = function(event) {
        var modal = document.getElementById('userProfileModal');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
