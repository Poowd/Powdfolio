//Cursor Script
const cursor = document.querySelector('.cursor');
const positionElement = (e) => {
  const mouseY = e.clientY;
  const mouseX = e.clientX;
  cursor.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
}
window.addEventListener('mousemove', positionElement)

//Overlay
const Overlay = document.querySelector('.overlay');
const openOverlay = () => { Overlay.style.display = "block"; }
const closeOverlay = () => { Overlay.style.display = "none"; }

//Dialog
const Dialog = document.querySelector('.dialog');
const openDialog = () => { Dialog.style.display = "flex"; }
const closeDialog = () => { Dialog.style.display = "none"; }

//Easter Egg
const Suprise = document.querySelector('.suprise');
const eopenDialog = () => { Suprise.style.display = "block"; }
const ecloseDialog = () => { Suprise.style.display = "none"; }

//Image Selection
const Container = document.querySelector('.innerRight');
const a = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (1).jpg\')'; }
const b = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (2).jpg\')'; }
const c = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (3).jpg\')'; }
const d = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (4).jpg\')'; }
const e = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (5).jpg\')'; }
const f = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (6).jpg\')'; }
const g = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (7).jpg\')'; }
const h = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (8).jpg\')'; }
const i = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (9).jpg\')'; }
const j = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (10).jpg\')'; }
const k = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (11).jpg\')'; }
const l = () => { Container.style.backgroundImage = 'url(\'./assets/imgs/1 (12).jpg\')'; }

//