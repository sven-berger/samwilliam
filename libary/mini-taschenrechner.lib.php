<h1 class="text-7xl font-bold mb-20">
    Mini-Taschenrechner
</h1>

<section data-controller="minitaschenrechner">
    <form method="POST" class="space-y-4" data-action="change->minitaschenrechner#calculate">
        <div class="flex gap-4">
            <div class="flex-1">
                <label for="ersteZahl mb-10">Erste Zahl</label>
                <input type="number" name="ersteZahl">
            </div>
            <div class="flex-1">
                <label for="zweiteZahl">Zweite Zahl</label>
                <input type="number" name="zweiteZahl">
            </div>
        </div>
        <label for="operation">Mathematische Operation</label>
        <select name="operation">
            <option value="Addieren">Addieren</option>
            <option value="Subtrahieren">Subtrahieren</option>
            <option value="Multiplizieren">Multiplizieren</option>
            <option value="Dividieren">Dividieren</option>
        </select>
        <button type="reset">Zurücksetzen</button>
    </form>

    <div data-minitaschenrechner-target="result" class="hidden"></div>
</section>