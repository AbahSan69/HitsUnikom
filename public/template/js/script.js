const toastTrigger = document.getElementById('tambahPlaylist')
const toastLiveExample = document.getElementById('showTambahPlaylist')
if (toastTrigger) {
  toastTrigger.addEventListener('click', () => {
    const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
  })
}

var audio = document.getElementById("audio");
audio.play();