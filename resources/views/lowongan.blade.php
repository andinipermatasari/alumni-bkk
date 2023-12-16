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
                <a href="/lowongan/lowonganAdmin" class="btn btn-primary">Tambah data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 1200px;">
                    <thead>
                        <tr>
                        <th scope="col">Id Lowongan</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Id Perusahaan</th>
                        <th scope="col">Id Admin</th>
                        <th scope="col">Lowonngan</th>
                        <th scope="col">Syarat</th>
                        <th scope="col">Keahlian</th>
                        <th scope="col">Kualifikasi</th>
                        <th scope="col">Jam Kerja</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Tipe Kerja</th>
                        <th scope="col">Tgl Post</th>
                        <th scope="col">Tgl Konfirmasi</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <!-- Di dalam tampilan admin.blade.php -->
                    @foreach($lowongan as $item)
                        <div class="company-details">
                            <td>{{ $item->id_lowongan }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->id_perusahaan }}</td>
                            <td>{{ $item->id_admin }}</td>
                            <td>{{ $item->lowongan }}</td>
                            <td>{{ $item->syarat }}</td>
                            <td>{{ $item->keahlian }}</td>
                            <td>{{ $item->kualifikasi }}</td>
                            <td>{{ $item->jam_kerja }}</td>
                            <td>{{ $item->gaji }}</td>
                            <td>{{ $item->pendidikan }}</td>
                            <td>{{ $item->tipe_kerja }}</td>
                            <td>{{ $item->tgl_post }}</td>
                            <td>{{ $item->tg_konfirmasi }}</td>
                            <td>{{ $item->status }}</td>
                        </div>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
@endsection