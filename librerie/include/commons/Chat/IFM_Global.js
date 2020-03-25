// JScript File

/*
*	SessionState:	enum
*	Description:	simulate enum type to describe status items for a connection
*	Author:			fbo
*/

var SessionState = 
{
	Disconnected: 0,
	Calling: 1,
	Connected: 2,
	IncomingMessages: 3,
	ToBeDisposed: 4,
	//mmr
	OnTerminatingCall: 5
	//mmr
}



