
<table>
    <caption> Объекты недвижимости <br /><br /></caption>
    <tr>
        <th> Тип объекта </th>
        <th> Район </th>
        <th> Адрес </th>
        <th> Площадь </th>
        <th> Цена </th>
        <th> Цена за метр<sup>2</sup></th>
        <th> Описание </th>
        <th> Контакты </th>
        <th> Дата публикации </th>
    </tr>


    <? foreach ($estates as $estate) { ?>

        <tr>
            <td><?=$estate->type_id?></td>
            <td><?=$estate->raion_id?></td>
            <td><?=$estate->adress?></td>
            <td><?=$estate->square?></td>
            <td><?=$estate->price?></td>
            <td><?=$estate->price_metr?></td>
            <td><?=$estate->description?></td>
            <td><?=$estate->contacts?></td>
            <td><?=$estate->date?></td>
        </tr>
    <? } ?>
</table>

<br />
<br />
<br />




<div class="notebook" id="notebook1">

    <ul class="pages">

    </ul>
    <div class="span3 add-link">
        <a style="position:relative; top:-50px; right:-20px; color:#0066CC;"href="/addestate"><ins>Добавить объект недвижимости</ins></a><br>
    </div>
</div>