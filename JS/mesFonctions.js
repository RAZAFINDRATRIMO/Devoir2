function Exo1()
{
    alert("SOS");
    $.ajax
    (
        {
            type:"get",
            url:"index.php/ControleurAccueil/", 
            data:,
            success:function(data)
            {
                   
            },
            error: function()
            {
               
            }
        }
    );
}

function InsertionConference()
{

}

function Exo2()
{

}

function VotesConference()
{
    var tabCode = Array();
    var tabNbVotes = Array();
    $("input[type=checkbox]").each(function(){
        tabCode.push($(this).val());
        tabNbVotes.push($(this).is(":checked"));
    });

    $.ajax
    (
        {
            
        }
    )
}