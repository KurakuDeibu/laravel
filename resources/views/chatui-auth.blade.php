<body>
    @extends('layouts.app')
    @section('title','Chat')
    @include('navbar.nav-auth')

    @section('content')
    <div class="container mt-3 border py-2">
        <div class="row">
            <div class="col-lg-3 border-end">
                <h2>Chats</h2>
                <p><i class="bi bi-chat-dots"></i> Online</p>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        <h5 class="mb-1">Laptop Acer 69th Edition...</h5>
                        <small>Posted by: Shan R.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">iPhone 15 Pro Max</h5>
                        <small>Posted by: John D.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Sony PlayStation 5</h5>
                        <small>Posted by: Emma W.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Samsung 4K QLED TV</h5>
                        <small>Posted by: Mike T.</small>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center border-bottom p-3">
                    <h3 class="h5 mb-0">Laptop Acer 69th Edition...</h3>
                    <span class="text-muted">Posted by: Shan R.</span>
                </div>
                <div class="flex-grow-1 p-3 overflow-auto">
                    <div class="d-flex flex-column">
                        <div class="alert alert-secondary align-self-start" role="alert">
                            <small class="text-muted d-block mb-1">Shan R. • 10:30 AM</small>
                            Yooo, I found this item nearby my area. we can have a deal. lmk if you are interested.
                        </div>
                        <div class="alert alert-success align-self-end" role="alert">
                            <small class="text-muted d-block mb-1">You • 10:35 AM</small>
                            Hey Shan! That's great news. Can you tell me more about the condition of the laptop?
                        </div>
                        <div class="alert alert-secondary align-self-start" role="alert">
                            <small class="text-muted d-block mb-1">Shan R. • 10:38 AM</small>
                            Sure thing! The laptop is in excellent condition. It's barely been used and still has the original packaging.
                        </div>
                        <div class="alert alert-success align-self-end" role="alert">
                            <small class="text-muted d-block mb-1">You • 10:40 AM</small>
                            Sounds promising! What are the specs? And does it come with a warranty?
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center p-3 border-top">
                    <input type="text" class="form-control me-2" placeholder="Message...">
                    <label for="file-upload" class="me-2">
                        <i class="bi bi-upload"></i>
                    </label>
                    <input id="file-upload" type="file" style="display: none;">
                    <button class="btn btn-primary">Send</button>
                </div>
            </div>
            <div class="col-lg-3 border-start">
                <div class="card">
                    <img src="https://placehold.co/600x600" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Acer 69th Edition...</h5>
                        <p class="card-text">Budget: ₱15,000</p>
                        <p class="card-text">Commission Fee: ₱500</p>
                        <p class="card-text">Location: Lapu-Lapu</p>
                        <button class="btn btn-secondary mb-2 w-100">View Details</button>
                        <button class="btn btn-primary w-100">Share Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection