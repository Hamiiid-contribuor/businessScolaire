<script type="text/javascript">


function date_heure(id)
{
        var date = new Date;
        var annee = date.getFullYear();
        var moi = date.getMonth();
        var mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
        var j = date.getDate();
        var jour = date.getDay();
        var jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        var h = date.getHours();
        if (h < 10)
        {
             h = "0" + h;
        }
           
        
        m = date.getMinutes();
        if(m<10)
        {
            m = "0" + m;
        }
        s = date.getSeconds();
        if(s<10)
        {
            s = "0" + s;
        }
        resultat = 'Nous sommes le '+jours[jour]+' '+j+' '+mois[moi]+' '+annee+' il est '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = resultat;
        setTimeout('date_heure("'+id+'");','1000');
        return true;
}


</script>

