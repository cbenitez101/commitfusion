<form method="POST">
    <div>
        Añadir Lote:
        <select name="lot_Id_perfil" id="idperfilchange">
            <option>Id Perfil</option>
            {foreach item=item from=$local}
                <option value="{$item.id}" data-duracion="{$item.Duracion}">{$item.ServerName}</option>
            {/foreach}
        </select>
        <select type="text" id="perfilduracionchange" disabled="disabled">
            <option>Seleccione una duración</option>
            <option value="300">5 minutos</option>
            <option value="600">10 minutos</option>
            <option value="900">15 minutos</option>
            <option value="1800">30 minutos</option>
            <option value="3600">1 hora</option>
            <option value="7200">2 horas</option>
            <option value="14400">4 horas</option>
            <option value="21600">6 horas</option>
            <option value="28800">8 horas</option>
            <option value="43200">12 horas</option>
            <option value="86400">1 día</option>
            <option value="172800">2 días</option>
            <option value="259200">3 días</option>
            <option value="345600">4 días</option>
            <option value="432000">5 días</option>
            <option value="518400">6 días</option>
            <option value="604800">7 días</option>
            <option value="691200">8 días</option>
            <option value="777600">9 días</option>
            <option value="864000">10 días</option>
            <option value="950400">11 días</option>
            <option value="1036800">12 días</option>
            <option value="1123200">13 días</option>
            <option value="1209600">14 días</option>
            <option value="1296000">15 días</option>
            <option value="1382400">16 días</option>
            <option value="1468800">17 días</option>
            <option value="1555200">18 días</option>
            <option value="1641600">19 días</option>
            <option value="1728000">20 días</option>
            <option value="1814400">21 días</option>
            <option value="1900800">22 días</option>
            <option value="1987200">23 días</option>
            <option value="2073600">24 días</option>
            <option value="2160000">25 días</option>
            <option value="2246400">26 días</option>
            <option value="2332800">27 días</option>
            <option value="2419200">28 días</option>
            <option value="2505600">29 días</option>
            <option value="2592000">30 días</option>
            <option value="2678400">31 días</option>
            <option value="5184000">2 meses</option>
            <option value="7776000">3 meses</option>
            <option value="10368000">4 meses</option>
            <option value="12960000">5 meses</option>
            <option value="15552000">6 meses</option>
            <option value="18144000">7 meses</option>
            <option value="20736000">8 meses</option>
            <option value="23328000">9 meses</option>
            <option value="25920000">10 meses</option>
            <option value="28512000">11 meses</option>
            <option value="31104000">1 año</option>
        </select>
        <input type="hidden"  name="lot_duration" id="lot_duration">
        <input type="text" name="lot_costo" placeholder="Costo">
        <input type="text" name="lot_precio" placeholder="Precio">
        <input class="ui-button" type="submit" value="Crear" name="create_lot" />
    </div>
</form>
<div class="float_left">
    {html_table cols=$cols  table_attr='border="0" class="tabledit lotestable" id="table-search"' loop=$lotes}
</div>
<div class="modal_lote modal_ventana">
    <input type="hidden" name="Id" id="modal_Id">
    <table>
        <tr>
            <td>
                Id Perfil:
            </td>
            <td>
                <select  name="Id_perfil" id="modal_Id_perfil">
                    <option>Id Perfil</option>
                    {foreach item=item from=$local}
                        <option value="{$item.id}">{$item.ServerName}</option>
                    {/foreach}
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Duracion:
            </td>
            <td>
                <select type="text" name="Duracion" id="modal_Duracion">
                    <option>Seleccione una duración</option>
                    <option value="300">5 minutos</option>
                    <option value="600">10 minutos</option>
                    <option value="900">15 minutos</option>
                    <option value="1800">30 minutos</option>
                    <option value="3600">1 hora</option>
                    <option value="7200">2 horas</option>
                    <option value="14400">4 horas</option>
                    <option value="21600">6 horas</option>
                    <option value="28800">8 horas</option>
                    <option value="43200">12 horas</option>
                    <option value="86400">1 día</option>
                    <option value="172800">2 días</option>
                    <option value="259200">3 días</option>
                    <option value="345600">4 días</option>
                    <option value="432000">5 días</option>
                    <option value="518400">6 días</option>
                    <option value="604800">7 días</option>
                    <option value="691200">8 días</option>
                    <option value="777600">9 días</option>
                    <option value="864000">10 días</option>
                    <option value="950400">11 días</option>
                    <option value="1036800">12 días</option>
                    <option value="1123200">13 días</option>
                    <option value="1209600">14 días</option>
                    <option value="1296000">15 días</option>
                    <option value="1382400">16 días</option>
                    <option value="1468800">17 días</option>
                    <option value="1555200">18 días</option>
                    <option value="1641600">19 días</option>
                    <option value="1728000">20 días</option>
                    <option value="1814400">21 días</option>
                    <option value="1900800">22 días</option>
                    <option value="1987200">23 días</option>
                    <option value="2073600">24 días</option>
                    <option value="2160000">25 días</option>
                    <option value="2246400">26 días</option>
                    <option value="2332800">27 días</option>
                    <option value="2419200">28 días</option>
                    <option value="2505600">29 días</option>
                    <option value="2592000">30 días</option>
                    <option value="2678400">31 días</option>
                    <option value="5184000">2 meses</option>
                    <option value="7776000">3 meses</option>
                    <option value="10368000">4 meses</option>
                    <option value="12960000">5 meses</option>
                    <option value="15552000">6 meses</option>
                    <option value="18144000">7 meses</option>
                    <option value="20736000">8 meses</option>
                    <option value="23328000">9 meses</option>
                    <option value="25920000">10 meses</option>
                    <option value="28512000">11 meses</option>
                    <option value="31104000">1 año</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Costo:
            </td>
            <td>
                <input type="text" name="Costo" id="modal_Costo">
            </td>
        </tr>
        <tr>
            <td>
                Precio:
            </td>
            <td>
                <input type="text" name="Precio" id="modal_Precio">
            </td>
        </tr>
    </table>
</div>