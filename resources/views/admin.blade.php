<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h1 class="fw-bold">Admin Dashboard</h1>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>            
        </div>
        <ul class="nav nav-tabs" id="adminTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="partners-tab" data-bs-toggle="tab" data-bs-target="#partners"
                    type="button" role="tab">
                    Partners
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="donors-tab" data-bs-toggle="tab" data-bs-target="#donors" type="button"
                    role="tab">
                    Donors
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contacts-tab" data-bs-toggle="tab" data-bs-target="#contacts"
                    type="button" role="tab">
                    Contacts
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="volunteers-tab" data-bs-toggle="tab" data-bs-target="#volunteers"
                    type="button" role="tab">
                    Volunteers
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="beneficiaries-tab" data-bs-toggle="tab" data-bs-target="#beneficiaries"
                    type="button" role="tab">
                    Beneficiaries
                </button>
            </li>
        </ul>


        <div class="tab-content mt-3">
            <!-- Partners Table -->
            <div class="tab-pane fade show active" id="partners" role="tabpanel">
                <h3 class="fw-bold">Partners</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Business Name</th>
                            <th>Restaurant Address</th>
                            <th>Business Phone</th>
                            <th>Email Address</th>
                            <th>Website</th>
                            <th>Contact Name</th>
                            <th>Position</th>
                            <th>Contact Phone</th>
                            <th>Contact Email</th>
                            <th>Food Type</th>
                            <th>Surplus Food</th>
                            <th>Pickup Schedule</th>
                            <th>Create at</th>
                            <th>Update at</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partners as $partner)
                            <tr>
                                <td>{{ $partner->id }}</td>
                                <td>{{ $partner->business_name }}</td>
                                <td>{{ $partner->restaurant_address }}</td>
                                <td>{{ $partner->business_phone }}</td>
                                <td>{{ $partner->email_address }}</td>
                                <td>{{ $partner->website }}</td>
                                <td>{{ $partner->contact_name }}</td>
                                <td>{{ $partner->position }}</td>
                                <td>{{ $partner->contact_phone }}</td>
                                <td>{{ $partner->contact_email }}</td>
                                <td>{{ $partner->food_type }}</td>
                                <td>{{ $partner->surplus_food }}</td>
                                <td>{{ $partner->pickup_schedule }}</td>
                                <td>{{ $partner->created_at }}</td>
                                <td>{{ $partner->updated_at }}</td>

                                <td>
                                    <form action="/admin/partners/{{ $partner->id }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this partner?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Donors Table -->
            <div class="tab-pane fade" id="donors" role="tabpanel">
                <h3 class="fw-bold">Donors</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Contact Name</th>
                            <th>Business Phone</th>
                            <th>Email Address</th>
                            <th>Restaurant Address</th>
                            <th>Food Type</th>
                            <th>Quantity Food</th>
                            <th>Delivery Method</th>
                            <th>Courier Name</th>
                            <th>Tracking Number</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donors as $donor)
                            <tr>
                                <td>{{ $donor->id }}</td>
                                <td>{{ $donor->contact_name }}</td>
                                <td>{{ $donor->business_phone }}</td>
                                <td>{{ $donor->email_address }}</td>
                                <td>{{ $donor->restaurant_address }}</td>
                                <td>{{ $donor->food_type }}</td>
                                <td>{{ $donor->quantity_food }}</td>
                                <td>{{ $donor->delivery_method }}</td>
                                <td>{{ $donor->courier_name }}</td>
                                <td>{{ $donor->tracking_number }}</td>
                                <td>{{ $donor->created_at }}</td>
                                <td>{{ $donor->updated_at }}</td>

                                <td>
                                    <form action="/admin/donors/{{ $donor->id }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this donor?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Contacts Table -->
            <div class="tab-pane fade" id="contacts" role="tabpanel">
                <h3 class="fw-bold">Contacts</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->firstName }}</td>
                                <td>{{ $contact->lastName }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>{{ $contact->updated_at }}</td>

                                <td>
                                    <form action="/admin/contacts/{{ $contact->id }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <!-- Form Volunteer -->
            <div class="tab-pane fade" id="volunteers" role="tabpanel">
                <div class="container">
                    <h3 class="fw-bold">Add Volunteer</h3>
                    <form action="{{ route('volunteers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Quota</label>
                            <input type="text" class="form-control" id="quota" name="quota" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Volunteer</button>
                    </form>
            
                    <hr>
            
                    <!-- Tabel Data Volunteer -->
                    <h3 class="mt-5 fw-bold">Volunteers List</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Quota</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($volunteers as $volunteer)
                                <tr>
                                    <td>{{ $volunteer->id }}</td>
                                    <td>{{ $volunteer->location }}</td>
                                    <td>{{ $volunteer->title }}</td>
                                    <td>{{ $volunteer->description }}</td>
                                    <td>{{ $volunteer->quota }}</td>
                                    <td>{{ $volunteer->created_at }}</td>
                                    <td>{{ $volunteer->updated_at }}</td>
                                    <td>
                                        <form action="/admin/volunteers/{{ $volunteer->id }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this volunteer?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>     
            
            
            <!-- Beneficiaries Table -->
            <div class="tab-pane fade" id="beneficiaries" role="tabpanel">
                <h3 class="fw-bold">Beneficiary</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>Reason for Application</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beneficiaries as $beneficiary)
                            <tr>
                                <td>{{ $beneficiary->id }}</td>
                                <td>{{ $beneficiary->full_name }}</td>
                                <td>{{ $beneficiary->phone_number }}</td>
                                <td>{{ $beneficiary->email_address }}</td>
                                <td>{{ $beneficiary->address }}</td>
                                <td>{{ $beneficiary->reason_apply }}</td>
                                <td>{{ $beneficiary->created_at }}</td>
                                <td>{{ $beneficiary->updated_at }}</td>

                                <td>
                                    <form action="/admin/beneficiaries/{{ $beneficiary->id }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this beneficiary?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
