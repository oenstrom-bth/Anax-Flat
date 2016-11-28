<?php
/**
 * Theme selector in the design course.
 */

?><article>
<h1>Temaväljare</h1>

<form method="post">
    <fieldset>
        <legend>Välj ett tema</legend>
        <select name="theme" onchange="form.submit();">
            <option value="-1">Inget tema är valt</option>
            <option value="-2">Använd standardinställningar</option>
            <?php foreach ($themes as $key => $value) :
                $selected = $key == $currentTheme["key"]
                    ? "selected"
                    : null;
                $separate = $value === $separator
                    ? "disabled=\"disabled\""
                    : null;
                $value = $separate
                    ? $separator
                    : "$key - " . $value["title"];
            ?>
                <option value="<?= $key ?>" <?= $selected ?> <?= $separate ?>>
                    <?= $value ?>
                </option>
            <?php endforeach; ?>
        </select>

        <output>
            <?php if ($message) : ?>
                <p><?= $message ?></p>
            <?php endif; ?>
        </output>
    </fieldset>
</form>

<p>Här kan du välja ett tema. Genom att välja ett tema, så sparas temadetaljerna i sessionen och appliceras på mallen när resultatsidan renderas.</p>

<p>Temat du väljer gör följande:</p>

<ul>
    <li>Ta bort all tidigare definierade stylesheets i <code>config/theme.php</code>.</li>
    <li>Lägg till klasser på <code>&lt;html&gt;</code>-elementet, om definierat.</li>
    <li>Lägg till stylesheets som definierat.</li>
</ul>

<p>Du kan redigera inställningarna för varje tema i konfigurationsfilen <code>config/theme-selector.php</code>.</p>

<p>Vyn för temaväljaren finns i <code>view/theme-selector/index.tpl.php</code>.</p>

<p>Koden som applicerar detaljerna från sessionen på mallen under rendering är <code>config/routes/custom.php</code>.</p>

</article>
