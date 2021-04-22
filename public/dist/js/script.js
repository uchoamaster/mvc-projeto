//chamadas de botão excluir

$('.editar').on('click', function() {
    swal.fire(
        'Muito bom!',
        'Você deseja editar este arquivo?',
        'success'
    )
})

$('.excluir').on('click', function() {
    Swal.fire({
        title: 'Você tem certeza?',
        text: "Ao aceitar vai perder os dados",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim , delete!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deletado!',
                'Seu arquivo foi deletado com sucesso!',
                'success'
            )
        }
    })
})