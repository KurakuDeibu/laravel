<!-- SIDE-BAR-START -->

<div class="col-lg-3 mb-4">

    <aside class="sidebar p-3">
        <div class="text-center mb-4">
            <img src="https://placehold.co/400x400" alt="User Avatar" class="user-avatar mb-2">
            <h3>Welcome, Joe!</h3>
            <p>Active Listings: 5</p>
            <div class="card bg-light mb-2"><a href="/dashboard" class="btn btn-outline-primary">Dashboard</a></div>
            {{-- <div class="card bg-light mb-2"><a href="/seller-dashboard" class="btn btn-outline-primary">Selling</a></div> --}}
        </div>
        <div class="card bg-light py-2 text-center mb-2">
            <h4>Your Stats</h4>
            <p>Items Sold: 12</p>
            <p>Earnings: ₱350</p>
        </div>
        @include('components.filter')

    </aside>
</div>
<!-- END OF SIDE-BAR -->
