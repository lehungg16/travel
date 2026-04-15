<?php
function admin_guard()
{
    if (!isset($_SESSION['role']) || $_SESSION['role'] != "1") {
        die("Khong co quyen truy cap");
    }
}

function admin_menu_items()
{
    return [
        [
            'label' => 'Tong quan',
            'items' => [
                ['key' => 'board', 'title' => 'Thong ke', 'href' => 'board.php', 'icon' => 'DB'],
                ['key' => 'booktour', 'title' => 'Don dat tour', 'href' => 'booktour.php', 'icon' => 'BK'],
            ],
        ],
        [
            'label' => 'Quan tri',
            'items' => [
                ['key' => 'users', 'title' => 'Nguoi dung', 'href' => 'users.php', 'icon' => 'US'],
                ['key' => 'add_user', 'title' => 'Them tai khoan', 'href' => 'add_user.php', 'icon' => 'AU'],
                ['key' => 'add_tour', 'title' => 'Them tour', 'href' => 'add_tour.php', 'icon' => 'AT'],
            ],
        ],
    ];
}

function render_admin_header($title, $activeKey)
{
    $menuGroups = admin_menu_items();
    ?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
        <link rel="stylesheet" href="../css/admin-dashboard.css">
    </head>
    <body>
    <div class="admin-shell">
        <main class="admin-main">
            <div class="admin-main__inner">
                <div class="admin-topbar">
                    <div>
                        <p class="eyebrow">Travel Web Admin</p>
                        <h1><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>
                    </div>
                    <div class="admin-actions">
                        <a class="ghost-button" href="../index.php">Ve trang chu</a>
                        <a class="danger-button" href="../logout.php">Dang xuat</a>
                    </div>
                </div>
    <?php
}

function render_admin_footer()
{
    ?>
            </div>
        </main>
        <aside class="admin-sidebar">
            <div class="brand-card">
                <p class="eyebrow">He thong quan tri</p>
                <h2>Travel Dashboard</h2>
                <p>Theo doi dat tour, tai khoan va noi dung tai mot noi.</p>
            </div>

            <?php foreach (admin_menu_items() as $group): ?>
                <div class="menu-group">
                    <p class="menu-group__title"><?php echo htmlspecialchars($group['label'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <nav class="menu-list">
                        <?php foreach ($group['items'] as $item): ?>
                            <a class="menu-item <?php echo $item['key'] === $GLOBALS['admin_active_key'] ? 'is-active' : ''; ?>" href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8'); ?>">
                                <span class="menu-item__icon"><?php echo htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <span><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                </div>
            <?php endforeach; ?>
        </aside>
    </div>
    </body>
    </html>
    <?php
}

$GLOBALS['admin_active_key'] = '';

function admin_page_start($title, $activeKey)
{
    $GLOBALS['admin_active_key'] = $activeKey;
    render_admin_header($title, $activeKey);
}

function admin_page_end()
{
    render_admin_footer();
}
?>
