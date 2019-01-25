<!-- Sidebar Menu Start -->
<ul class="nav navbar-nav iq-main-menu mb-5 pb-5" id="sidebar-menu" role="tablist">
    <li class="p-3 d-flex justify-content-between">
        <div class="dropdown">
            <button class="btn btn-sm btn-border rounded-pill d-flex align-items-center dropdown-toggle" id="meet_now" data-bs-toggle="dropdown" aria-expanded="false">
                <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M21.3309 7.44251C20.9119 7.17855 20.3969 7.1552 19.9579 7.37855L18.4759 8.12677C17.9279 8.40291 17.5879 8.96129 17.5879 9.58261V15.4161C17.5879 16.0374 17.9279 16.5948 18.4759 16.873L19.9569 17.6202C20.1579 17.7237 20.3729 17.7735 20.5879 17.7735C20.8459 17.7735 21.1019 17.7004 21.3309 17.5572C21.7499 17.2943 21.9999 16.8384 21.9999 16.339V8.66179C21.9999 8.1623 21.7499 7.70646 21.3309 7.44251Z" fill="currentColor"></path>
                    <path d="M11.9051 20H6.11304C3.69102 20 2 18.3299 2 15.9391V9.06091C2 6.66904 3.69102 5 6.11304 5H11.9051C14.3271 5 16.0181 6.66904 16.0181 9.06091V15.9391C16.0181 18.3299 14.3271 20 11.9051 20Z" fill="currentColor"></path>
                </svg>
                <span class="ms-2">Video Call</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="meet_now">
                <li><a class="dropdown-item" href="#">Create Room</a></li>
                <li><a class="dropdown-item" href="#">Join Room</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-sm btn-border rounded-pill d-flex align-items-center dropdown-toggle" id="new_chat" data-bs-toggle="dropdown" aria-expanded="false">
                <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                    <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                    <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                </svg>
                <span class="ms-2">New Chat</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="new_chat">
                <li><a class="dropdown-item" href="#">New Message</a></li>
                <li><a class="dropdown-item" href="#">Create Group</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
            <span class="default-icon">My Contacts</span>
            <span class="mini-icon">+</span>
        </a>
    </li>
    <x-modules.chat.widgets.user-list id="101" className="active" status="online" username="Ellyse Perry" lastMessage="today" userProfileImg="avatar/03.png" userMessage="I have share some media you can enjoy." />
    <x-modules.chat.widgets.user-list id="102" username="Faf Du Plessis" lastMessage="today" unreadMessage="5" userProfileImg="avatar/01.png" userMessage="What are you doing?" />
    <x-modules.chat.widgets.user-list id="103" username="Brendon McCullum" lastMessage="yesterday" userProfileImg="avatar/04.png" userMessage="You have time for my task?" />
    <x-modules.chat.widgets.user-list id="104" username="Wade Johnson" lastMessage="yesterday" userProfileImg="avatar/06.png" userMessage="I want some teachnic for fast code can you help?" />
    <x-modules.chat.widgets.user-list id="105" username="Arlene Cyrus" status="online" lastMessage="20-03-2021" userProfileImg="avatar/05.png" userMessage="How are you?" />
    <x-modules.chat.widgets.user-list id="106" username="Darlene Warner" status="online" lastMessage="10-03-2021" userProfileImg="avatar/09.png" userMessage="I have share some media you can enjoy." />
    <x-modules.chat.widgets.user-list id="107" username="Jenny Wilson" lastMessage="01-03-2021" userProfileImg="avatar/11.png" userMessage="You have time for for my task?" />
    <x-modules.chat.widgets.user-list id="108" username="Devon Lane" status="online" lastMessage="25-02-2021" userProfileImg="avatar/12.png" userMessage="What are you doing?" />
    <x-modules.chat.widgets.user-list id="109" username="Christopher" lastMessage="23-01-2021" userProfileImg="avatar/08.png" userMessage="You have time for for my task?" />
    <x-modules.chat.widgets.user-list id="110" username="Rachel Green" status="online" lastMessage="04-12-2020" userProfileImg="avatar/07.png" userMessage="I want some teachnic for fast code can you help?" />
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
            <span class="default-icon">Other</span>
            <span class="mini-icon">-</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="javascript:void(0)" target="_blank">
            <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M2 6.447C2 3.996 4.03024 2 6.52453 2H11.4856C13.9748 2 16 3.99 16 6.437V17.553C16 20.005 13.9698 22 11.4744 22H6.51537C4.02515 22 2 20.01 2 17.563V16.623V6.447Z" fill="currentColor"></path>
                    <path d="M21.7787 11.4548L18.9329 8.5458C18.6388 8.2458 18.1655 8.2458 17.8723 8.5478C17.5802 8.8498 17.5811 9.3368 17.8743 9.6368L19.4335 11.2298H17.9386H9.54826C9.13434 11.2298 8.79834 11.5748 8.79834 11.9998C8.79834 12.4258 9.13434 12.7698 9.54826 12.7698H19.4335L17.8743 14.3628C17.5811 14.6628 17.5802 15.1498 17.8723 15.4518C18.0194 15.6028 18.2113 15.6788 18.4041 15.6788C18.595 15.6788 18.7868 15.6028 18.9329 15.4538L21.7787 12.5458C21.9199 12.4008 21.9998 12.2048 21.9998 11.9998C21.9998 11.7958 21.9199 11.5998 21.7787 11.4548Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Sign Out</span>
        </a>
    </li>
    <li class="nav-item mb-5 pb-5">
        <a class="nav-link d-flex align-items-center gap-2" href="javascript:void(0);">
            <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M22 11.9998C22 17.5238 17.523 21.9998 12 21.9998C6.477 21.9998 2 17.5238 2 11.9998C2 6.47776 6.477 1.99976 12 1.99976C17.523 1.99976 22 6.47776 22 11.9998Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8701 12.6307C12.8701 13.1127 12.4771 13.5057 11.9951 13.5057C11.5131 13.5057 11.1201 13.1127 11.1201 12.6307V8.21069C11.1201 7.72869 11.5131 7.33569 11.9951 7.33569C12.4771 7.33569 12.8701 7.72869 12.8701 8.21069V12.6307ZM11.1251 15.8035C11.1251 15.3215 11.5161 14.9285 11.9951 14.9285C12.4881 14.9285 12.8801 15.3215 12.8801 15.8035C12.8801 16.2855 12.4881 16.6785 12.0051 16.6785C11.5201 16.6785 11.1251 16.2855 11.1251 15.8035Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Help</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link d-flex align-items-center gap-2" href="javascript:void(0);">
            <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M22 11.9998C22 17.5238 17.523 21.9998 12 21.9998C6.477 21.9998 2 17.5238 2 11.9998C2 6.47776 6.477 1.99976 12 1.99976C17.523 1.99976 22 6.47776 22 11.9998Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8701 12.6307C12.8701 13.1127 12.4771 13.5057 11.9951 13.5057C11.5131 13.5057 11.1201 13.1127 11.1201 12.6307V8.21069C11.1201 7.72869 11.5131 7.33569 11.9951 7.33569C12.4771 7.33569 12.8701 7.72869 12.8701 8.21069V12.6307ZM11.1251 15.8035C11.1251 15.3215 11.5161 14.9285 11.9951 14.9285C12.4881 14.9285 12.8801 15.3215 12.8801 15.8035C12.8801 16.2855 12.4881 16.6785 12.0051 16.6785C11.5201 16.6785 11.1251 16.2855 11.1251 15.8035Z" fill="currentColor"></path>
                </svg>
            </i>
        </a>
        </li>
        </ul>

<!-- Sidebar Menu End -->

