<form action="{{ url('/api/eccuadratica') }}" method="post">
    @csrf
    <label for="vaule_a">Valor a:</label>
    <input type="number" name="value_a"><br>
    <label for="vaule_b">Valor b:</label>
    <input type="number" name="value_b"><br>
    <label for="vaule_c">Valor c:</label>
    <input type="number" name="value_c"><br>
    <input type="submit" name="Send"><br>
</form>