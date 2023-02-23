<div class="sidebar-header">
    <div class="pro-sidebar-logo">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo/logo.png" alt="" />
        </div>
        <h5 class="mb-0">Accounts</h5>
    </div>
</div>

<div class="sidebar-content">
    <nav class="menu open-current-submenu">
        <ul>
            <li class="menu-header"><span> Accounting </span></li>
            <li class="menu-item active sub-menu">
                <a href="#">
                    <span class="menu-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </span>
                    <span class="menu-title">Accounting</span>
                </a>
                <div class="sub-menu-list">
                    <ul>
                        <li class="menu-item active">
                            <a href="index.html">
                                <span class="menu-title">Deposit</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="expense.html">
                                <span class="menu-title">Expense</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="cashbook.html">
                                <span class="menu-title">Cashbook</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ledgerbook.html">
                                <span class="menu-title">Ledgerbook</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="funds.html">
                                <span class="menu-title">Funds</span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('admin.head.list') }}">
                                <span class="menu-title">Account Heads</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.head.create') }}">
                                <span class="menu-title">Add Account Heads</span>
                            </a>
                        </li>
                        {{-- <li class="menu-item sub-menu">
                            <a href="#">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-user-gear"></i>
                                </span>
                                <span class="menu-title">Account Settings</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="fundsadd.html">
                                            <span class="menu-title">Funds Add </span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="accountheads.html">
                                            <span class="menu-title">Account Heads</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </li>
            <li class="menu-item active sub-menu">
                <a href="#">
                    <span class="menu-icon">
                        <i class="fa-solid fa-cog"></i>
                    </span>
                    <span class="menu-title">Budget & Allowcation</span>
                </a>
                <div class="sub-menu-list">
                    <ul>
                        <li class="menu-item">
                            <a href="{{ route('sessionYear.index') }}">
                                <span class="menu-title">Set Budget Year</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="expense.html">
                                <span class="menu-title">Budget</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="expense.html">
                                <span class="menu-title">Allowcation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item active sub-menu">
                <a href="#">
                    <span class="menu-icon">
                        <i class="fa-solid fa-cog"></i>
                    </span>
                    <span class="menu-title">Settings</span>
                </a>
                <div class="sub-menu-list">
                    <ul>
                        <li class="menu-item active">
                            <a href="{{ route('admin.generalSetting.general') }}">
                                <span class="menu-title">General Settings</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="expense.html">
                                <span class="menu-title">Budget & Allowcation</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="expense.html">
                                <span class="menu-title">Budget & Allowcation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>
<div class="sidebar-footer">
    <div class="footer-box">
        <a href="#">
            <img class="img-fluid w-50 rounded-circle" src="{{ asset('backend') }}/assets/images/users/userProfile.png" alt="userProfile" />
        </a>
        <span>User Name</span>
    </div>
</div>
