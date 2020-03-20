// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here, other Firebase libraries
// are not available in the service worker.
importScripts('/wbresp/js/firebase/firebase-app.js');
importScripts('/wbresp/js/firebase/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
    'messagingSenderId': '6012072918'
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

//messaging.setBackgroundMessageHandler((payload) => {
//	console.log('[firebase-messaging-sw.js] Received background message ', payload);
//	// Customize notification here
//	const notificationTitle = payload.notification.title
//	const notificationOptions = {
//		body: payload.notification.body,
//		icon: '/fe/img/logo_small.png'
//	};
//	
//	return self.registration.showNotification(notificationTitle, notificationOptions);
//});
//
//self.addEventListener('notificationclick', (event) => {
//	event.notification.close();
//	event.waitUntil(self.clients.openWindow(event.notification.data));
//});