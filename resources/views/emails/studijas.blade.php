<h1>Saņemts jauns pieteikums no {{ $name }}!</h1>

<table class="table table-bordered">

    <tr>
        <td>Reģistrācijas nr:</td>
        <td><b>{{$form['legal_nr']}}</b></td>
    </tr>
    <tr>
        <td>Nosaukums:</td>
        <td><b>{{$form['legal_name']}}</b></td>
    </tr>
    <tr>
        <td>Atbildīgā persona:</td>
        <td><b>{{$form['responsible_person']}}</b></td>
    </tr>
    <tr>
        <td>Telefons:</td>
        <td><b>{{$form['phone']}}</b></td>
    </tr>
    <tr>
        <td>E-Pasts:</td>
        <td><b>{{$form['email']}}</b></td>
    </tr>
    <tr>
        <td>Piezīmes:</td>
        <td style="color: green; text-transform: uppercase;"><b>{{$form['notes']}}</b></td>
    </tr>
    <tr>
        <td>Paraksījies jaunumiem:</td>
        <td><b style="color: <?= ($form['offer']) ? "green" : "red" ?>;">{{ ($form['offer']) ? "Pierakstījies" : "Atteicies" }}</b></td>
    </tr>
</table>
{{--<pre>--}}
    {{--{{var_dump($form)}}--}}
{{--</pre>--}}