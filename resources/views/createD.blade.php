<form action="{{ url('/api/derivada') }}" method="post">
    @csrf
    <label for="vaule_a">Valor a:</label>
    <input type="number" name="value_a"><br>
    <label for="vaule_b">Valor b:</label>
    <input type="number" name="value_b"><br>
    <label for="vaule_c">Valor c:</label>
    <input type="number" name="value_c"><br>
    <label for="vaule_d">Valor d:</label>
    <input type="number" name="value_d"><br>
    <label for="vaule_e">Valor e:</label>
    <input type="number" name="value_e"><br>
    <input type="submit" name="Send"><br>
</form>