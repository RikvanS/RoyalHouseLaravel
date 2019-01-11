# RoyalHouseLaravel

11/01 13:55

Project opgepikt na kleine 2 weken stilstand, recap van site zoals het nu ervoor staat en intenties komende tijd:

Hero header, bio sectie, contact form, social buttons. Basic layout van main page.
Hero header heeft cta naar contact form. Contact form bestaat nog niet, link werkt nog niet. Smooth scroll al wel toegevoegd aan css.

Social buttons linken naar nieuwe pagina, milde css effecten, in principe goed voor eerste versie.

Sidebar navigatie balk toegevoegd, deze moet pas getoond worden als gebruiker voorbij hero header scrollt. Meer JS opties onderzoeken, huidige manier werkt maar is hacky.

Sidebar bevat (o.a.) link naar de nieuws/posts pagina, waar de bandleden zelf kunnen posten. Hiervoor is CRUD functionaliteit nodig. Postcontroller aangemaakt met --resource en routes toegevoegd aan web.php, nog geen verdere invulling.
Migration voor create posts en post model aangemaakt.

To-do:

Main page styling is nog niet af. Contact form bestaat nog niet.
In principe is de site bruikbaar als one-page met enkel een contact form en bio segment, dit moet dus ook de MVP worden.
CRUD functionaliteit reserveren voor versie 2, eerst focus op oplevering van one-page met werkend contactform, goed gestyled, responsive en mobile friendly.

-------------

14:35

Bootstrap contact form toegevoegd, basis functionaliteit okee, berichten worden weggeschreven naar database.
REquired meldingen zijn nog niet naar wens, mailer functie nog niet gekoppeld, nog niet gerestyled.

--------

