'use strict';

//sidebar
const sidebar = document.querySelector('.sidebar');
const overlay = document.querySelector('.overlay');
const closeSidebar = document.querySelector('.close-sidebar');
const showSidebar = document.querySelector('.show-sidebar');

//modal window
const closeBtn = document.querySelector('.close-sup');
const openBtn = document.querySelector('.show-sup');
const sendBtn = document.querySelector('.btn-send');
const modal = document.querySelector('.sup');

// sidebar
function closeSb() {
  sidebar.classList.add('hidden');
  overlay.classList.add('hidden');
}

function openSb() {
  sidebar.classList.remove('hidden');
  overlay.classList.remove('hidden');
}

showSidebar.addEventListener('click', openSb);

closeSidebar.addEventListener('click', closeSb);
overlay.addEventListener('click', closeSb);

document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape' && !sidebar.classList.contains('hidden')) {
    closeSb();
  }
});

//modal
const openModal = function () {
  modal.classList.remove('hidden');
  overlay.classList.remove('hidden');
};

const closeModal = function () {
  modal.classList.add('hidden');
  overlay.classList.add('hidden');
};

const sendAlert = function () {
  alert('Mensagem enviada ao suporte com sucesso!');
};

openBtn.addEventListener('click', openModal);

closeBtn.addEventListener('click', closeModal);

overlay.addEventListener('click', closeModal);

document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
    closeModal();
  }
});

sendBtn.addEventListener('click', sendAlert);
