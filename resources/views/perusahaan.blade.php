@extends('index')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <ul>
                            <li class="header-icon dib"><i class="ti-bell"></i>
                                <div class="drop-down">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
												<img class="pull-left m-r-10 avatar-img" src="admin/assets/images/avatar/3.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Mr. John</div>
													<div class="notification-text">5 members joined today </div>
												</div>
												</a>
                                            </li>
                                            <li>
                                                <a href="#">
												<img class="pull-left m-r-10 avatar-img" src="admin/assets/images/avatar/3.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Mariam</div>
													<div class="notification-text">likes a photo of you</div>
												</div>
												</a>
                                            </li>
                                            <li>
                                                <a href="#">
												<img class="pull-left m-r-10 avatar-img" src="admin/assets/images/avatar/3.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Tasnim</div>
													<div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
												</div>
											    </a>
                                            </li>
                                            <li>
                                                <a href="#">
												<img class="pull-left m-r-10 avatar-img" src="admin/assets/images/avatar/3.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Mr. John</div>
													<div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
												</div>
												</a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="header-icon dib"><i class="ti-email"></i>
                                <div class="drop-down">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
												<img class="pull-left m-r-10 avatar-img" src="admin/assets/images/avatar/1.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Michael Qin</div>
													<div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
												</div>
												</a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
												<img class="pull-left m-r-10 avatar-img" src="admin/assets/images/avatar/2.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Mr. John</div>
													<div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
												</div>
												</a>
                                            </li>
                                            <li>
                                                <a href="#">
												<img class="pull-left m-r-10 avatar-img" src="admin/assets/images/avatar/3.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Michael Qin</div>
													<div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
												</div>
					    						</a>
                                            </li>
                                            <li>
                                                <a href="#">
												<img class="pull-left m-r-10 avatar-img" src="admin/assets/images/avatar/2.jpg" alt="" />
												<div class="notification-content">
													<small class="notification-timestamp pull-right">02:34 PM</small>
													<div class="notification-heading">Mr. John</div>
													<div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
												</div>
												</a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="header-icon dib"><span class="user-avatar">Admin <i class="ti-angle-down f-s-10"></i></span>
                                <div class="drop-down dropdown-profile">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li><a href="/profileadmin"><i class="ti-user"></i> <span>Profile</span></a></li>
                                            <li><a href="/logoutadmin"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-header mt-3">
                <a href="/perusahaan/add" class="btn btn-primary">Tambah data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id Perusahaan</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Kontak</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <!-- Di dalam tampilan admin.blade.php -->
                    @foreach($perusahaan as $item)
                        <tr>
                            <div class="company-details">
                                <td>{{ $item->id_perusahaan }}</td>
                                <td>{{ $item->perusahaan }}</td>
                                <td>{{ $item->kontak }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                    <img src="/storage/{{ $item->foto }}" alt="" class="rounded-circle" width="200">
                                </td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="/perusahaan/{{ $item->id }}/edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                    </a>
                                    <a href="/perusahaan/{{ $item->id }}/delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                        </svg>
                                    </a>
                                </td>
                            </div>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
@endsection