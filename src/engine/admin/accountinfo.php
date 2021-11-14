<div class="block accountinfo">
    <div class="block-content">
        <div class="block-content-title">Информация об аккаунте: <?php echo $_GET['name']; ?></div>
        <div class="infoblock">
            <?php accountInfo($link); ?>
        </div>
        <div class="block-content-title">Последние действия пользователя:</div>
        <div class="infoblockLogs">
            <table>
                <tr>
                    <th>Действие</th>
                    <th>IP</th>
                    <th>Дата</th>
                </tr>
                <?php accountInfoLogs($link); ?>
            </table>
        </div>
    </div>
</div>