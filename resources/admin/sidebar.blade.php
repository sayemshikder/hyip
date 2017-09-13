<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar tree">
        <li class="@if( $current_uri == 'admin' ) active @endif"><a href='{{ route('admin-dashboard') }}'>Dashboard</a>
        </li>
        <li class="@if( preg_match('/^admin\/subscriptions/i', $current_uri) ) active @endif"><a
                    href='{{ route('admin-subscriptions-list') }}'>Subscriptions</a></li>
        <li class="@if( preg_match('/^admin\/users/i', $current_uri) ) active @endif"><a href='{{ route('admin-users-list') }}'>Users</a></li>
        <li class="@if( preg_match('/^admin\/sending-messages/i', $current_uri) ) active @endif"><a href='{{ route('admin.sending-messages') }}'>Sending messages</a></li>
        <li class="@if( preg_match('/^admin\/feedback/i', $current_uri) ) active @endif"><a href='{{ route('admin-feedback-list', ['type' => 'users']) }}'>Feedback @if (\App\Models\Feedback::hasUnreadFeedback()) <span class="title_unread" style="background: red">new</span>@endif</a></li>
        <li class="@if( preg_match('/^admin\/blacklist/i', $current_uri) ) active @endif"><a href='{{ route('admin.blacklist') }}'>Blacklist</a></li>
        <li class="treeview menu-open @if( Route::currentRouteName() == 'admin.carousel.list') active @endif">
            <a href="#">
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                <span>Content</span>
            </a>
            <ul class="treeview-menu menu-open">
                <li class="@if( Route::currentRouteName() == 'admin.carousel.list') active @endif">
                    <a href='{{ route('admin.carousel.list') }}'>Carousel</a></li>
                <li class="@if( Route::currentRouteName() == 'admin.social-networks.list') active @endif">
                    <a href='{{ route('admin.social-networks.list') }}'>Social networks</a></li>
                <li class="@if( Route::currentRouteName() == 'admin.faq.list') active @endif">
                    <a href='{{ route('admin.faq.list') }}'>FAQ</a></li>
                <li class="@if( Route::currentRouteName() == 'admin.articles.list') active @endif">
                    <a href='{{ route('admin.articles.list') }}'>Articles</a></li>
                <li class="@if( Route::currentRouteName() == 'admin.contacts.list') active @endif">
                    <a href='{{ route('admin.contacts.list') }}'>Contacts</a></li>
                <li class="@if( Route::currentRouteName() == 'admin.about-notations.list') active @endif">
                    <a href='{{ route('admin.about-notations.list') }}'>About</a></li>
                <li class="@if( Route::currentRouteName() == 'admin.regulations.get') active @endif">
                    <a href='{{ route('admin.regulations.get') }}'>Regulations</a></li>
            </ul>
        </li>
    </ul>
</div>