@extends('layouts.app')
@section('content')
    <section class="w-full h-[500px] 510px:h-[350px] bg-cover bg-center relative flex items-center justify-center"
        style="background-image: url({{ asset('assets/750-killo-watt-solar-plant-in-deutschland.jpg') }})">
        <div class="header top-0 left-0 absolute w-full h-full"></div>
        <div class="text-center relative z-10">
            <h2
                class="text-white text-[70px] leading-[80px] 920px:text-6xl 770px:text-4xl 510px:text-3xl 400px:text-xl imprint-heading">
                Impressum + Datenschutzerklärung
            </h2>
            <p class="text-white font-semibold">GFC EUROPEs größtes 750-Killowatt-Projekt auf dem großen Freiland in
                Deutschland</p>
        </div>
    </section>

    <section class="w-full p-6 imprint">
        <header class="max-w-4xl h-full m-auto py-[120px] px-4">
            <h1 class="font-bold mb-6 text-4xl text-center">Impraint and Data protection</h1>
            <p class="mb-2"></p>
            <ul class="mb-6">
                <li>Verantwortlich/Responsable:</li>
                <li>Aamir Shaheen</li>
                <li><b>Dörpfeldstr. 10</b></li>
                <li>12489 Berlin</li>
                <li>Kontakt:</li>
                <li>Tel: <b>+49 17683196282</b></li>
                <li>E-Mail: <b>info@gfc-europe.eu</b></li>
            </ul>

            <h3 class="text-2xl font-semibold mb-3">​Haftungsausschluß: </h3>
            <p class="mb-6">GFC haftet nur für eigene Inhalte, die ständig aktualisiert und ergänzt werden. Trotz
                sorgfältiger Prüfung garantieren wir nicht für vollständige Richtigkeit und Aktualität, insbesondere nicht
                für Inhalte externer Links.</p>
            <h3 class="text-2xl font-semibold mb-3">​Datenschutzerklärung</h3>
            <p class="mb-6">Wir freuen uns sehr über Ihr Interesse an unserem Unternehmen. Datenschutz hat einen besonders
                hohen Stellenwert für die German Fixing Consultants (GFC). Eine Nutzung der Internetseiten der German Fixing
                Consultants (GFC) ist grundsätzlich ohne jede Angabe personenbezogener Daten möglich. Sofern eine betroffene
                Person besondere Services unseres Unternehmens über unsere Internetseite in Anspruch nehmen möchte, könnte
                jedoch eine Verarbeitung personenbezogener Daten erforderlich werden. Ist die Verarbeitung personenbezogener
                Daten erforderlich und besteht für eine solche Verarbeitung keine gesetzliche Grundlage, holen wir generell
                eine Einwilligung der betroffenen Person ein.</p>
            <p class="mb-6">Die Verarbeitung personenbezogener Daten, beispielsweise des Namens, der Anschrift,
                E-Mail-Adresse oder Telefonnummer einer betroffenen Person, erfolgt stets im Einklang mit der
                Datenschutz-Grundverordnung und in Übereinstimmung mit den für German Fixing Consultants (GFC) geltenden
                landesspezifischen Datenschutzbestimmungen. Mittels dieser Datenschutzerklärung möchte unser Unternehmen die
                Öffentlichkeit über Art, Umfang und Zweck der von uns erhobenen, genutzten und verarbeiteten
                personenbezogenen Daten informieren. Ferner werden betroffene Personen mittels dieser Datenschutzerklärung
                über die ihnen zustehenden Rechte aufgeklärt.</p>
            <p class="mb-6">Die German Fixing Consultants (GFC) hat als für die Verarbeitung Verantwortlicher zahlreiche
                technische und organisatorische Maßnahmen umgesetzt, um einen möglichst lückenlosen Schutz der über diese
                Internetseite verarbeiteten personenbezogenen Daten sicherzustellen. Dennoch können Internetbasierte
                Datenübertragungen grundsätzlich Sicherheitslücken aufweisen, sodass ein absoluter Schutz nicht
                gewährleistet werden kann. Aus diesem Grund steht es jeder betroffenen Person frei, personenbezogene Daten
                auch auf alternativen Wegen, beispielsweise telefonisch, an uns zu übermitteln.</p>
            <h3 class="text-2xl font-semibold mb-3">1. Begriffsbestimmungen</h3>
            <p class="mb-6">Die Datenschutzerklärung der German Fixing Consultants (GFC) beruht auf den Begrifflichkeiten,
                die durch den Europäischen Richtlinien- und Verordnungsgeber beim Erlass der Datenschutz-Grundverordnung
                (DS-GVO) verwendet wurden. Unsere Datenschutzerklärung soll sowohl für die Öffentlichkeit als auch für
                unsere Kunden und Geschäftspartner einfach lesbar und verständlich sein. Um dies zu gewährleisten, möchten
                wir vorab die verwendeten Begrifflichkeiten erläutern.</p>
            <p class="mb-6">Wir verwenden in dieser Datenschutzerklärung unter anderem die folgenden Begriffe:</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">a) Personenbezogene Daten</h3>
            <p class="mb-6 ml-3">Personenbezogene Daten sind alle Informationen, die sich auf eine identifizierte oder
                identifizierbare natürliche Person (im Folgenden „betroffene Person“) beziehen. Als identifizierbar wird
                eine natürliche Person angesehen, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer Kennung
                wie einem Namen, zu einer Kennnummer, zu Standortdaten, zu einer Online-Kennung oder zu einem oder mehreren
                besonderen Merkmalen, die Ausdruck der physischen, physiologischen, genetischen, psychischen,
                wirtschaftlichen, kulturellen oder sozialen Identität dieser natürlichen Person sind, identifiziert werden
                kann.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">b) Betroffene Person</h3>
            <p class="mb-6 ml-3">Betroffene Person ist jede identifizierte oder identifizierbare natürliche Person, deren
                personenbezogene Daten von dem für die Verarbeitung Verantwortlichen verarbeitet werden.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">c) Verarbeitung</h3>
            <p class="mb-6 ml-3">Verarbeitung ist jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführte Vorgang
                oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten wie das Erheben, das Erfassen,
                die Organisation, das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das Abfragen,
                die Verwendung, die Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der Bereitstellung,
                den Abgleich oder die Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">d) Einschränkung der Verarbeitung</h3>
            <p class="mb-6 ml-3">Einschränkung der Verarbeitung ist die Markierung gespeicherter personenbezogener Daten mit
                dem Ziel, ihre künftige Verarbeitung einzuschränken.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">e) Profiling</h3>
            <p class="mb-6 ml-3">Profiling ist jede Art der automatisierten Verarbeitung personenbezogener Daten, die darin
                besteht, dass diese personenbezogenen Daten verwendet werden, um bestimmte persönliche Aspekte, die sich auf
                eine natürliche Person beziehen, zu bewerten, insbesondere, um Aspekte bezüglich Arbeitsleistung,
                wirtschaftlicher Lage, Gesundheit, persönlicher Vorlieben, Interessen, Zuverlässigkeit, Verhalten,
                Aufenthaltsort oder Ortswechsel dieser natürlichen Person zu analysieren oder vorherzusagen.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">f) Pseudonymisierung</h3>
            <p class="mb-6 ml-3">Pseudonymisierung ist die Verarbeitung personenbezogener Daten in einer Weise, auf welche
                die personenbezogenen Daten ohne Hinzuziehung zusätzlicher Informationen nicht mehr einer spezifischen
                betroffenen Person zugeordnet werden können, sofern diese zusätzlichen Informationen gesondert aufbewahrt
                werden und technischen und organisatorischen Maßnahmen unterliegen, die gewährleisten, dass die
                personenbezogenen Daten nicht einer identifizierten oder identifizierbaren natürlichen Person zugewiesen
                werden.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">g) Verantwortlicher oder für die Verarbeitung Verantwortlicher</h3>
            <p class="mb-6 ml-3">Verantwortlicher oder für die Verarbeitung Verantwortlicher ist die natürliche oder
                juristische Person, Behörde, Einrichtung oder andere Stelle, die allein oder gemeinsam mit anderen über die
                Zwecke und Mittel der Verarbeitung von personenbezogenen Daten entscheidet. Sind die Zwecke und Mittel
                dieser Verarbeitung durch das Unionsrecht oder das Recht der Mitgliedstaaten vorgegeben, so kann der
                Verantwortliche beziehungsweise können die bestimmten Kriterien seiner Benennung nach dem Unionsrecht oder
                dem Recht der Mitgliedstaaten vorgesehen werden.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">h) Auftragsverarbeiter</h3>
            <p class="mb-6 ml-3">Auftragsverarbeiter ist eine natürliche oder juristische Person, Behörde, Einrichtung oder
                andere Stelle, die personenbezogene Daten im Auftrag des Verantwortlichen verarbeitet.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">i) Empfänger</h3>
            <p class="mb-6 ml-3">Empfänger ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere
                Stelle, der personenbezogene Daten offengelegt werden, unabhängig davon, ob es sich bei ihr um einen Dritten
                handelt oder nicht. Behörden, die im Rahmen eines bestimmten Untersuchungsauftrags nach dem Unionsrecht oder
                dem Recht der Mitgliedstaaten möglicherweise personenbezogene Daten erhalten, gelten jedoch nicht als
                Empfänger.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">j) Dritter</h3>
            <p class="mb-6 ml-3">Dritter ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere
                Stelle außer der betroffenen Person, dem Verantwortlichen, dem Auftragsverarbeiter und den Personen, die
                unter der unmittelbaren Verantwortung des Verantwortlichen oder des Auftragsverarbeiters befugt sind, die
                personenbezogenen Daten zu verarbeiten.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">k) Einwilligung</h3>
            <p class="mb-6 ml-3">Einwilligung ist jede von der betroffenen Person freiwillig für den bestimmten Fall in
                informierter Weise und unmissverständlich abgegebene Willensbekundung in Form einer Erklärung oder einer
                sonstigen eindeutigen bestätigenden Handlung, mit der die betroffene Person zu verstehen gibt, dass sie mit
                der Verarbeitung der sie betreffenden personenbezogenen Daten einverstanden ist.</p>
            <h3 class="text-2xl font-semibold mb-3">2. Name und Anschrift des für die Verarbeitung Verantwortlichen</h3>
            <p class="mb-6">Verantwortlicher im Sinne der Datenschutz-Grundverordnung, sonstiger in den Mitgliedstaaten
                der Europäischen Union geltenden Datenschutzgesetze und anderer Bestimmungen mit datenschutzrechtlichem
                Charakter ist die:</p>
            <ul class="mb-6">
                <li>Aamir Shaheen</li>
                <li>Pi Anchor Channel</li>
                <li><b>Dörpfeldstr. 10</b></li>
                <li>12489 Berlin</li>
                <li>Kontakt:</li>
                <li>Tel: <b>+49 17683196282</b></li>
                <li>Website: <b>https://pianchorchannel.com</b></li>
            </ul>
            <h3 class="text-2xl font-semibold mb-3">3. Erfassung von allgemeinen Daten und Informationen</h3>
            <p class="mb-6">Die Internetseite der German Fixing Consultants (GFC) erfasst mit jedem Aufruf der
                Internetseite durch eine betroffene Person oder ein automatisiertes System eine Reihe von allgemeinen Daten
                und Informationen. Diese allgemeinen Daten und Informationen werden in den Logfiles des Servers gespeichert.
                Erfasst werden können die (1) verwendeten Browsertypen und Versionen, (2) das vom zugreifenden System
                verwendete Betriebssystem, (3) die Internetseite, von welcher ein zugreifendes System auf unsere
                Internetseite gelangt (sogenannte Referrer), (4) die Unterwebseiten, welche über ein zugreifendes System auf
                unserer Internetseite angesteuert werden, (5) das Datum und die Uhrzeit eines Zugriffs auf die
                Internetseite, (6) eine Internet-Protokoll-Adresse (IP-Adresse), (7) der Internet-Service-Provider des
                zugreifenden Systems und (8) sonstige ähnliche Daten und Informationen, die der Gefahrenabwehr im Falle von
                Angriffen auf unsere informationstechnologischen Systeme dienen.</p>
            <p class="mb-6">Bei der Nutzung dieser allgemeinen Daten und Informationen zieht die German Fixing Consultants
                (GFC) keine Rückschlüsse auf die betroffene Person. Diese Informationen werden vielmehr benötigt, um (1) die
                Inhalte unserer Internetseite korrekt auszuliefern, (2) die Inhalte unserer Internetseite sowie die Werbung
                für diese zu optimieren, (3) die dauerhafte Funktionsfähigkeit unserer informationstechnologischen Systeme
                und der Technik unserer Internetseite zu gewährleisten sowie (4) um Strafverfolgungsbehörden im Falle eines
                Cyberangriffes die zur Strafverfolgung notwendigen Informationen bereitzustellen. Diese anonym erhobenen
                Daten und Informationen werden durch die German Fixing Consultants (GFC) daher einerseits statistisch und
                ferner mit dem Ziel ausgewertet, den Datenschutz und die Datensicherheit in unserem Unternehmen zu erhöhen,
                um letztlich ein optimales Schutzniveau für die von uns verarbeiteten personenbezogenen Daten
                sicherzustellen. Die anonymen Daten der Server-Logfiles werden getrennt von allen durch eine betroffene
                Person angegebenen personenbezogenen Daten gespeichert.</p>
            <h3 class="text-2xl font-semibold mb-3">4. Kontaktmöglichkeit über die Internetseite</h3>
            <p class="mb-6">Die Internetseite der German Fixing Consultants (GFC) enthält aufgrund von gesetzlichen
                Vorschriften Angaben, die eine schnelle elektronische Kontaktaufnahme zu unserem Unternehmen sowie eine
                unmittelbare Kommunikation mit uns ermöglichen, was ebenfalls eine allgemeine Adresse der sogenannten
                elektronischen Post (E-Mail-Adresse) umfasst. Sofern eine betroffene Person per E-Mail oder über ein
                Kontaktformular den Kontakt mit dem für die Verarbeitung Verantwortlichen aufnimmt, werden die von der
                betroffenen Person übermittelten personenbezogenen Daten automatisch gespeichert. Solche auf freiwilliger
                Basis von einer betroffenen Person an den für die Verarbeitung Verantwortlichen übermittelten
                personenbezogenen Daten werden für Zwecke der Bearbeitung oder der Kontaktaufnahme zur betroffenen Person
                gespeichert. Es erfolgt keine Weitergabe dieser personenbezogenen Daten an Dritte.</p>
            <h3 class="text-2xl font-semibold mb-3">5. Routinemäßige Löschung und Sperrung von personenbezogenen Daten</h3>
            <p class="mb-6">Der für die Verarbeitung Verantwortliche verarbeitet und speichert personenbezogene Daten der
                betroffenen Person nur für den Zeitraum, der zur Erreichung des Speicherungszwecks erforderlich ist oder
                sofern dies durch den Europäischen Richtlinien- und Verordnungsgeber oder einen anderen Gesetzgeber in
                Gesetzen oder Vorschriften, welchen der für die Verarbeitung Verantwortliche unterliegt, vorgesehen wurde.
            </p>
            <p class="mb-6">Entfällt der Speicherungszweck oder läuft eine vom Europäischen Richtlinien- und
                Verordnungsgeber oder einem anderen zuständigen Gesetzgeber vorgeschriebene Speicherfrist ab, werden die
                personenbezogenen Daten routinemäßig und entsprechend den gesetzlichen Vorschriften gesperrt oder gelöscht.
            </p>
            <h3 class="text-2xl font-semibold mb-3">6. Rechte der betroffenen Person</h3>
            <h3 class="text-xl ml-3 font-semibold mb-3">a) Recht auf Bestätigung</h3>
            <p class="mb-6 ml-3">Jede betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber
                eingeräumte Recht, von dem für die Verarbeitung Verantwortlichen eine Bestätigung darüber zu verlangen, ob
                sie betreffende personenbezogene Daten verarbeitet werden. Möchte eine betroffene Person dieses
                Bestätigungsrecht in Anspruch nehmen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die
                Verarbeitung Verantwortlichen wenden.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">b) Recht auf Auskunft</h3>
            <p class="mb-6 ml-3">Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
                Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, jederzeit von dem für die Verarbeitung
                Verantwortlichen unentgeltliche Auskunft über die zu seiner Person gespeicherten personenbezogenen Daten und
                eine Kopie dieser Auskunft zu erhalten. Ferner hat der Europäische Richtlinien- und Verordnungsgeber der
                betroffenen Person Auskunft über folgende Informationen zugestanden:</p>
            <p class="mb-6 ml-3">die Verarbeitungszweckedie Kategorien personenbezogener Daten, die verarbeitet werdendie
                Empfänger oder Kategorien von Empfängern, gegenüber denen die personenbezogenen Daten offengelegt worden
                sind oder noch offengelegt werden, insbesondere bei Empfängern in Drittländern oder bei internationalen
                Organisationenfalls möglich die geplante Dauer, für die die personenbezogenen Daten gespeichert werden,
                oder, falls dies nicht möglich ist, die Kriterien für die Festlegung dieser Dauerdas Bestehen eines Rechts
                auf Berichtigung oder Löschung der sie betreffenden personenbezogenen Daten oder auf Einschränkung der
                Verarbeitung durch den Verantwortlichen oder eines Widerspruchsrechts gegen diese Verarbeitungdas Bestehen
                eines Beschwerderechts bei einer Aufsichtsbehördewenn die personenbezogenen Daten nicht bei der betroffenen
                Person erhoben werden: Alle verfügbaren Informationen über die Herkunft der Daten das Bestehen einer
                automatisierten Entscheidungsfindung einschließlich Profiling gemäß Artikel 22 Abs.1 und 4 DS-GVO und —
                zumindest in diesen Fällen — aussagekräftige Informationen über die involvierte Logik sowie die Tragweite
                und die angestrebten Auswirkungen einer derartigen Verarbeitung für die betroffene Person.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">c) Recht auf Berichtigung</h3>
            <p class="mb-6 ml-3">Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
                Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, die unverzügliche Berichtigung sie
                betreffender unrichtiger personenbezogener Daten zu verlangen. Ferner steht der betroffenen Person das Recht
                zu, unter Berücksichtigung der Zwecke der Verarbeitung, die Vervollständigung unvollständiger
                personenbezogener Daten — auch mittels einer ergänzenden Erklärung — zu verlangen.</p>
            <p class="mb-6 ml-3">Möchte eine betroffene Person dieses Berichtigungsrecht in Anspruch nehmen, kann sie sich
                hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">d) Recht auf Löschung (Recht auf Vergessen werden)</h3>
            <p class="mb-6 ml-3">Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
                Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, von dem Verantwortlichen zu verlangen, dass
                die sie betreffenden personenbezogenen Daten unverzüglich gelöscht werden, sofern einer der folgenden Gründe
                zutrifft und soweit die Verarbeitung nicht erforderlich ist:</p>
            <p class="mb-6 ml-3">Die personenbezogenen Daten wurden für solche Zwecke erhoben oder auf sonstige Weise
                verarbeitet, für welche sie nicht mehr notwendig sind.Die betroffene Person widerruft ihre Einwilligung, auf
                die sich die Verarbeitung gemäß Art. 6 Abs. 1 Buchstabe a DS-GVO oder Art. 9 Abs. 2 Buchstabe a DS-GVO
                stützte, und es fehlt an einer anderweitigen Rechtsgrundlage für die Verarbeitung.Die betroffene Person legt
                gemäß Art. 21 Abs. 1 DS-GVO Widerspruch gegen die Verarbeitung ein, und es liegen keine vorrangigen
                berechtigten Gründe für die Verarbeitung vor, oder die betroffene Person legt gemäß Art. 21 Abs. 2 DS-GVO
                Widerspruch gegen die Verarbeitung ein.Die personenbezogenen Daten wurden unrechtmäßig verarbeitet.Die
                Löschung der personenbezogenen Daten ist zur Erfüllung einer rechtlichen Verpflichtung nach dem Unionsrecht
                oder dem Recht der Mitgliedstaaten erforderlich, dem der Verantwortliche unterliegt.Die personenbezogenen
                Daten wurden in Bezug auf angebotene Dienste der Informationsgesellschaft gemäß Art. 8 Abs. 1 DS-GVO
                erhoben.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">e) Recht auf Einschränkung der Verarbeitung</h3>
            <p class="mb-6 ml-3">Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
                Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, von dem Verantwortlichen die Einschränkung
                der Verarbeitung zu verlangen, wenn eine der folgenden Voraussetzungen gegeben ist:</p>
            <p class="mb-6 ml-3">Die Richtigkeit der personenbezogenen Daten wird von der betroffenen Person bestritten, und
                zwar für eine Dauer, die es dem Verantwortlichen ermöglicht, die Richtigkeit der personenbezogenen Daten zu
                überprüfen.Die Verarbeitung ist unrechtmäßig, die betroffene Person lehnt die Löschung der personenbezogenen
                Daten ab und verlangt stattdessen die Einschränkung der Nutzung der personenbezogenen Daten.Der
                Verantwortliche benötigt die personenbezogenen Daten für die Zwecke der Verarbeitung nicht länger, die
                betroffene Person benötigt sie jedoch zur Geltendmachung, Ausübung oder Verteidigung von
                Rechtsansprüchen.Die betroffene Person hat Widerspruch gegen die Verarbeitung gem. Art. 21 Abs. 1 DS-GVO
                eingelegt und es steht noch nicht fest, ob die berechtigten Gründe des Verantwortlichen gegenüber denen der
                betroffenen Person überwiegen.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">f) Recht auf Datenübertragbarkeit</h3>
            <p class="mb-6 ml-3">Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
                Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, die sie betreffenden personenbezogenen Daten,
                welche durch die betroffene Person einem Verantwortlichen bereitgestellt wurden, in einem strukturierten,
                gängigen und maschinenlesbaren Format zu erhalten. Sie hat außerdem das Recht, diese Daten einem anderen
                Verantwortlichen ohne Behinderung durch den Verantwortlichen, dem die personenbezogenen Daten bereitgestellt
                wurden, zu übermitteln, sofern die Verarbeitung auf der Einwilligung gemäß Art. 6 Abs. 1 Buchstabe a DS-GVO
                oder Art. 9 Abs. 2 Buchstabe a DS-GVO oder auf einem Vertrag gemäß Art. 6 Abs. 1 Buchstabe b DS-GVO beruht
                und die Verarbeitung mithilfe automatisierter Verfahren erfolgt, sofern die Verarbeitung nicht für die
                Wahrnehmung einer Aufgabe erforderlich ist, die im öffentlichen Interesse liegt oder in Ausübung
                öffentlicher Gewalt erfolgt, welche dem Verantwortlichen übertragen wurde.</p>
            <p class="mb-6 ml-3">Ferner hat die betroffene Person bei der Ausübung ihres Rechts auf Datenübertragbarkeit
                gemäß Art. 20 Abs. 1 DS-GVO das Recht, zu erwirken, dass die personenbezogenen Daten direkt von einem
                Verantwortlichen an einen anderen Verantwortlichen übermittelt werden, soweit dies technisch machbar ist und
                sofern hiervon nicht die Rechte und Freiheiten anderer Personen beeinträchtigt werden.</p>
            <p class="mb-6 ml-3">Zur Geltendmachung des Rechts auf Datenübertragbarkeit kann sich die betroffene Person
                jederzeit an einen Mitarbeiter der German Fixing Consultants (GFC) wenden.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">g) Recht auf Widerspruch</h3>
            <p class="mb-6 ml-3">Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
                Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, aus Gründen, die sich aus ihrer besonderen
                Situation ergeben, jederzeit gegen die Verarbeitung sie betreffender personenbezogener Daten, die aufgrund
                von Art. 6 Abs. 1 Buchstaben e oder f DS-GVO erfolgt, Widerspruch einzulegen. Dies gilt auch für ein auf
                diese Bestimmungen gestütztes Profiling.</p>
            <p class="mb-6 ml-3">Die German Fixing Consultants (GFC) verarbeitet die personenbezogenen Daten im Falle des
                Widerspruchs nicht mehr, es sei denn, wir können zwingende schutzwürdige Gründe für die Verarbeitung
                nachweisen, die den Interessen, Rechten und Freiheiten der betroffenen Person überwiegen, oder die
                Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.</p>
            <p class="mb-6 ml-3">Verarbeitet die IGerman Fixing Consultants (GFC) personenbezogene Daten, um Direktwerbung
                zu betreiben, so hat die betroffene Person das Recht, jederzeit Widerspruch gegen die Verarbeitung der
                personenbezogenen Daten zum Zwecke derartiger Werbung einzulegen. Dies gilt auch für das Profiling, soweit
                es mit solcher Direktwerbung in Verbindung steht. Widerspricht die betroffene Person gegenüber der German
                Fixing Consultants (GFC) der Verarbeitung für Zwecke der Direktwerbung, so wird die German Fixing
                Consultants (GFC) die personenbezogenen Daten nicht mehr für diese Zwecke verarbeiten.</p>
            <p class="mb-6 ml-3">Zudem hat die betroffene Person das Recht, aus Gründen, die sich aus ihrer besonderen
                Situation ergeben, gegen die sie betreffende Verarbeitung personenbezogener Daten, die bei der German Fixing
                Consultants (GFC) zu wissenschaftlichen oder historischen Forschungszwecken oder zu statistischen Zwecken
                gemäß Art. 89 Abs. 1 DS-GVO erfolgen, Widerspruch einzulegen, es sei denn, eine solche Verarbeitung ist zur
                Erfüllung einer im öffentlichen Interesse liegenden Aufgabe erforderlich.</p>
            <p class="mb-6 ml-3">Zur Ausübung des Rechts auf Widerspruch kann sich die betroffene Person direkt jeden
                Mitarbeiter der German Fixing Consultants (GFC) oder einen anderen Mitarbeiter wenden. Der betroffenen
                Person steht es ferner frei, im Zusammenhang mit der Nutzung von Diensten der Informationsgesellschaft,
                ungeachtet der Richtlinie 2002/58/EG, ihr Widerspruchsrecht mittels automatisierter Verfahren auszuüben, bei
                denen technische Spezifikationen verwendet werden.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">h) Automatisierte Entscheidungen im Einzelfall einschließlich
                Profiling</h3>
            <p class="mb-6 ml-3">Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
                Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, nicht einer ausschließlich auf einer
                automatisierten Verarbeitung — einschließlich Profiling — beruhenden Entscheidung unterworfen zu werden, die
                ihr gegenüber rechtliche Wirkung entfaltet oder sie in ähnlicher Weise erheblich beeinträchtigt, sofern die
                Entscheidung (1) nicht für den Abschluss oder die Erfüllung eines Vertrags zwischen der betroffenen Person
                und dem Verantwortlichen erforderlich ist, oder (2) aufgrund von Rechtsvorschriften der Union oder der
                Mitgliedstaaten, denen der Verantwortliche unterliegt, zulässig ist und diese Rechtsvorschriften angemessene
                Maßnahmen zur Wahrung der Rechte und Freiheiten sowie der berechtigten Interessen der betroffenen Person
                enthalten oder (3) mit ausdrücklicher Einwilligung der betroffenen Person erfolgt.</p>
            <p class="mb-6 ml-3">Ist die Entscheidung (1) für den Abschluss oder die Erfüllung eines Vertrags zwischen der
                betroffenen Person und dem Verantwortlichen erforderlich oder (2) erfolgt sie mit ausdrücklicher
                Einwilligung der betroffenen Person, trifft die German Fixing Consultants (GFC) angemessene Maßnahmen, um
                die Rechte und Freiheiten sowie die berechtigten Interessen der betroffenen Person zu wahren, wozu
                mindestens das Recht auf Erwirkung des Eingreifens einer Person seitens des Verantwortlichen, auf Darlegung
                des eigenen Standpunkts und auf Anfechtung der Entscheidung gehört.</p>
            <p class="mb-6 ml-3">Möchte die betroffene Person Rechte mit Bezug auf automatisierte Entscheidungen geltend
                machen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen
                wenden.</p>
            <h3 class="text-xl ml-3 font-semibold mb-3">i) Recht auf Widerruf einer datenschutzrechtlichen Einwilligung</h3>
            <p class="mb-6 ml-3">Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom
                Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, eine Einwilligung zur Verarbeitung
                personenbezogener Daten jederzeit zu widerrufen.</p>
            <p class="mb-6 ml-3">Möchte die betroffene Person ihr Recht auf Widerruf einer Einwilligung geltend machen, kann
                sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.</p>
            <h3 class="text-2xl font-semibold mb-3">7. Datenschutzbestimmungen zu Einsatz und Verwendung von Google
                Analytics (mit Anonymisierungsfunktion)</h3>
            <p class="mb-6">Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite die Komponente Google
                Analytics (mit Anonymisierungsfunktion) integriert. Google Analytics ist ein Web-Analyse-Dienst. Web-Analyse
                ist die Erhebung, Sammlung und Auswertung von Daten über das Verhalten von Besuchern von Internetseiten. Ein
                Web-Analyse-Dienst erfasst unter anderem Daten darüber, von welcher Internetseite eine betroffene Person auf
                eine Internetseite gekommen ist (sogenannte Referrer), auf welche Unterseiten der Internetseite zugegriffen
                oder wie oft und für welche Verweildauer eine Unterseite betrachtet wurde. Eine Web-Analyse wird überwiegend
                zur Optimierung einer Internetseite und zur Kosten-Nutzen-Analyse von Internetwerbung eingesetzt.</p>
            <p class="mb-6">Betreibergesellschaft der Google-Analytics-Komponente ist die Google Inc., 1600 Amphitheatre
                Pkwy, Mountain View, CA 94043-1351, USA.</p>
            <p class="mb-6">Der für die Verarbeitung Verantwortliche verwendet für die Web-Analyse über Google Analytics
                den Zusatz "_gat._anonymizeIp". Mittels dieses Zusatzes wird die IP-Adresse des Internetanschlusses der
                betroffenen Person von Google gekürzt und anonymisiert, wenn der Zugriff auf unsere Internetseiten aus einem
                Mitgliedstaat der Europäischen Union oder aus einem anderen Vertragsstaat des Abkommens über den
                Europäischen Wirtschaftsraum erfolgt.</p>
            <p class="mb-6">Der Zweck der Google-Analytics-Komponente ist die Analyse der Besucherströme auf unserer
                Internetseite. Google nutzt die gewonnenen Daten und Informationen unter anderem dazu, die Nutzung unserer
                Internetseite auszuwerten, um für uns Online-Reports, welche die Aktivitäten auf unseren Internetseiten
                aufzeigen, zusammenzustellen, und um weitere mit der Nutzung unserer Internetseite in Verbindung stehende
                Dienstleistungen zu erbringen.</p>
            <p class="mb-6">Google Analytics setzt ein Cookie auf dem informationstechnologischen System der betroffenen
                Person. Was Cookies sind, wurde oben bereits erläutert. Mit Setzung des Cookies wird Google eine Analyse der
                Benutzung unserer Internetseite ermöglicht. Durch jeden Aufruf einer der Einzelseiten dieser Internetseite,
                die durch den für die Verarbeitung Verantwortlichen betrieben wird und auf welcher eine
                Google-Analytics-Komponente integriert wurde, wird der Internetbrowser auf dem informationstechnologischen
                System der betroffenen Person automatisch durch die jeweilige Google-Analytics-Komponente veranlasst, Daten
                zum Zwecke der Online-Analyse an Google zu übermitteln. Im Rahmen dieses technischen Verfahrens erhält
                Google Kenntnis über personenbezogene Daten, wie der IP-Adresse der betroffenen Person, die Google unter
                anderem dazu dienen, die Herkunft der Besucher und Klicks nachzuvollziehen und in der Folge
                Provisionsabrechnungen zu ermöglichen.</p>
            <p class="mb-6">Mittels des Cookies werden personenbezogene Informationen, beispielsweise die Zugriffszeit,
                der Ort, von welchem ein Zugriff ausging und die Häufigkeit der Besuche unserer Internetseite durch die
                betroffene Person, gespeichert. Bei jedem Besuch unserer Internetseiten werden diese personenbezogenen
                Daten, einschließlich der IP-Adresse des von der betroffenen Person genutzten Internetanschlusses, an Google
                in den Vereinigten Staaten von Amerika übertragen. Diese personenbezogenen Daten werden durch Google in den
                Vereinigten Staaten von Amerika gespeichert. Google gibt diese über das technische Verfahren erhobenen
                personenbezogenen Daten unter Umständen an Dritte weiter.</p>
            <p class="mb-6">Die betroffene Person kann die Setzung von Cookies durch unsere Internetseite, wie oben
                bereits dargestellt, jederzeit mittels einer entsprechenden Einstellung des genutzten Internetbrowsers
                verhindern und damit der Setzung von Cookies dauerhaft widersprechen. Eine solche Einstellung des genutzten
                Internetbrowsers würde auch verhindern, dass Google ein Cookie auf dem informationstechnologischen System
                der betroffenen Person setzt. Zudem kann ein von Google Analytics bereits gesetzter Cookie jederzeit über
                den Internetbrowser oder andere Softwareprogramme gelöscht werden.</p>
            <p class="mb-6">Ferner besteht für die betroffene Person die Möglichkeit, einer Erfassung der durch Google
                Analytics erzeugten, auf eine Nutzung dieser Internetseite bezogenen Daten sowie der Verarbeitung dieser
                Daten durch Google zu widersprechen und eine solche zu verhindern. Hierzu muss die betroffene Person ein
                Browser-Add-On unter dem Link https://tools.google.com/dlpage/gaoptout herunterladen und installieren.
                Dieses Browser-Add-On teilt Google Analytics über JavaScript mit, dass keine Daten und Informationen zu den
                Besuchen von Internetseiten an Google Analytics übermittelt werden dürfen. Die Installation des
                Browser-Add-Ons wird von Google als Widerspruch gewertet. Wird das informationstechnologische System der
                betroffenen Person zu einem späteren Zeitpunkt gelöscht, formatiert oder neu installiert, muss durch die
                betroffene Person eine erneute Installation des Browser-Add-Ons erfolgen, um Google Analytics zu
                deaktivieren. Sofern das Browser-Add-On durch die betroffene Person oder einer anderen Person, die ihrem
                Machtbereich zuzurechnen ist, deinstalliert oder deaktiviert wird, besteht die Möglichkeit der
                Neuinstallation oder der erneuten Aktivierung des Browser-Add-Ons.</p>
            <p class="mb-6">Weitere Informationen und die geltenden Datenschutzbestimmungen von Google können unter
                https://www.google.de/intl/de/policies/privacy/ und unter</p>
            <p class="mb-6">http://www.google.com/analytics/terms/de.html abgerufen werden. Google Analytics wird unter
                diesem Link https://www.google.com/intl/de_de/analytics/ genauer erläutert.</p>
            <h3 class="text-2xl font-semibold mb-3">8. Rechtsgrundlage der Verarbeitung</h3>
            <p class="mb-6">Art. 6 I lit. a DS-GVO dient unserem Unternehmen als Rechtsgrundlage für
                Verarbeitungsvorgänge, bei denen wir eine Einwilligung für einen bestimmten Verarbeitungszweck einholen. Ist
                die Verarbeitung personenbezogener Daten zur Erfüllung eines Vertrags, dessen Vertragspartei die betroffene
                Person ist, erforderlich, wie dies beispielsweise bei Verarbeitungsvorgängen der Fall ist, die für eine
                Lieferung von Waren oder die Erbringung einer sonstigen Leistung oder Gegenleistung notwendig sind, so
                beruht die Verarbeitung auf Art. 6 I lit. b DS-GVO. Gleiches gilt für solche Verarbeitungsvorgänge die zur
                Durchführung vorvertraglicher Maßnahmen erforderlich sind, etwa in Fällen von Anfragen zur unseren Produkten
                oder Leistungen. Unterliegt unser Unternehmen einer rechtlichen Verpflichtung durch welche eine Verarbeitung
                von personenbezogenen Daten erforderlich wird, wie beispielsweise zur Erfüllung steuerlicher Pflichten, so
                basiert die Verarbeitung auf Art. 6 I lit. c DS-GVO. In seltenen Fällen könnte die Verarbeitung von
                personenbezogenen Daten erforderlich werden, um lebenswichtige Interessen der betroffenen Person oder einer
                anderen natürlichen Person zu schützen. Dies wäre beispielsweise der Fall, wenn ein Besucher in unserem
                Betrieb verletzt werden würde und daraufhin sein Name, sein Alter, seine Krankenkassendaten oder sonstige
                lebenswichtige Informationen an einen Arzt, ein Krankenhaus oder sonstige Dritte weitergegeben werden
                müssten. Dann würde die Verarbeitung auf Art. 6 I lit. d DS-GVO beruhen. Letztlich könnten
                Verarbeitungsvorgänge auf Art. 6 I lit. f DS-GVO beruhen. Auf dieser Rechtsgrundlage basieren
                Verarbeitungsvorgänge, die von keiner der vorgenannten Rechtsgrundlagen erfasst werden, wenn die
                Verarbeitung zur Wahrung eines berechtigten Interesses unseres Unternehmens oder eines Dritten erforderlich
                ist, sofern die Interessen, Grundrechte und Grundfreiheiten des Betroffenen nicht überwiegen. Solche
                Verarbeitungsvorgänge sind uns insbesondere deshalb gestattet, weil sie durch den Europäischen Gesetzgeber
                besonders erwähnt wurden. Er vertrat insoweit die Auffassung, dass ein berechtigtes Interesse anzunehmen
                sein könnte, wenn die betroffene Person ein Kunde des Verantwortlichen ist (Erwägungsgrund 47 Satz 2
                DS-GVO).</p>
            <p class="mb-6 ml-3">9. Berechtigte Interessen an der Verarbeitung, die von dem Verantwortlichen oder einem
                Dritten verfolgt werden</p>
            <p class="mb-6">Basiert die Verarbeitung personenbezogener Daten auf Artikel 6 I lit. f DS-GVO ist unser
                berechtigtes Interesse die Durchführung unserer Geschäftstätigkeit zugunsten des Wohlergehens all unserer
                Mitarbeiter und unserer Anteilseigner.</p>
            <p class="mb-6 ml-3">10. Dauer, für die die personenbezogenen Daten gespeichert werden</p>
            <p class="mb-6">Das Kriterium für die Dauer der Speicherung von personenbezogenen Daten ist die jeweilige
                gesetzliche Aufbewahrungsfrist. Nach Ablauf der Frist werden die entsprechenden Daten routinemäßig gelöscht,
                sofern sie nicht mehr zur Vertragserfüllung oder Vertragsanbahnung erforderlich sind.</p>
            <p class="mb-6 ml-3">11. Gesetzliche oder vertragliche Vorschriften zur Bereitstellung der personenbezogenen
                Daten; Erforderlichkeit für den Vertragsabschluss; Verpflichtung der betroffenen Person, die
                personenbezogenen Daten bereitzustellen; mögliche Folgen der Nichtbereitstellung</p>
            <p class="mb-6">Wir klären Sie darüber auf, dass die Bereitstellung personenbezogener Daten zum Teil
                gesetzlich vorgeschrieben ist (z.B. Steuervorschriften) oder sich auch aus vertraglichen Regelungen (z.B.
                Angaben zum Vertragspartner) ergeben kann. Mitunter kann es zu einem Vertragsschluss erforderlich sein, dass
                eine betroffene Person uns personenbezogene Daten zur Verfügung stellt, die in der Folge durch uns
                verarbeitet werden müssen. Die betroffene Person ist beispielsweise verpflichtet uns personenbezogene Daten
                bereitzustellen, wenn unser Unternehmen mit ihr einen Vertrag abschließt. Eine Nichtbereitstellung der
                personenbezogenen Daten hätte zur Folge, dass der Vertrag mit dem Betroffenen nicht geschlossen werden
                könnte. Vor einer Bereitstellung personenbezogener Daten durch den Betroffenen muss sich der Betroffene an
                einen unserer Mitarbeiter wenden. Unser Mitarbeiter klärt den Betroffenen einzelfallbezogen darüber auf, ob
                die Bereitstellung der personenbezogenen Daten gesetzlich oder vertraglich vorgeschrieben oder für den
                Vertragsabschluss erforderlich ist, ob eine Verpflichtung besteht, die personenbezogenen Daten
                bereitzustellen, und welche Folgen die Nichtbereitstellung der personenbezogenen Daten hätte.</p>
            <p class="mb-6 ml-3">12. Bestehen einer automatisierten Entscheidungsfindung</p>
            <p class="mb-6">Als verantwortungsbewusstes Unternehmen verzichten wir auf eine automatische
                Entscheidungsfindung oder ein Profiling.</p>
            <p class="mb-6">Diese Datenschutzerklärung wurde durch den Datenschutzerklärungs-Generator der DGD Deutsche
                Gesellschaft für Datenschutz GmbH, die als Externer Datenschutzbeauftragter Straubing tätig ist, in
                Kooperation mit dem Anwalt für Datenschutzrecht Christian Solmecke erstellt.</p>
        </header>
    </section>
@endsection
