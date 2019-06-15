<footer class="footer">
    <div id="map" style="width: 100%; height: 400px;">
        <div class="contact">
            <div class="contact_title">Адреса сервисных центров:</div>
            <p>Пролетарская 13 А</p>
            <p>Тимерязева 40</p>
            <div class="contact_title">Часы работы:</div>
            <p>ПН-ПТ с 9:00 до 20:00</p>
            <p>СБ с 10:00 до 20:00</p>
            <p>ВС выходной день</p>

            <div class="contact_title"></div>
            <p>Узнать стоимость ремонта вы можете по телефону <span>66-99-76</span></p>
        </div>
    </div>
    <script>
        DG.then(function() {
            var map,
                marker1,
                marker2,
                group;

            map = DG.map('map', {
                center: [52.28572866248453, 104.29184823803712],
                zoom: 13
            });

            marker1 = DG.marker([52.284206, 104.29957300000001]).addTo(map);
            marker2 = DG.marker([52.287800315135264, 104.2863617159386]).addTo(map);

            group = DG.featureGroup([marker1, marker2]);
            group.addTo(map);
            group.on('click', function(e) {
                map.setView([e.latlng.lat, e.latlng.lng]);
            });
        });
    </script>
</footer>
<?php wp_footer(); ?>
    </body>
</html>
