
    let $deletePollButtons = document.querySelectorAll(".delete-poll");

    $deletePollButtons.forEach(function($deletePoll) {
        $deletePoll.addEventListener('click', function(){
            let $formDeletion =document.querySelector('.delete-form');
            console.log($deletePoll.id);
            let idForDeletion = parseInt(($deletePoll.id).replace("button", ""));

            let linkDeletion = `/poll/delete/${idForDeletion}`;
            $formDeletion.setAttribute('action', linkDeletion);
        });
        
    });
    
