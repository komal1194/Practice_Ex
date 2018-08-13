function readdata(event)
{
	var str=event.data;
	postMessage(str+ "This is from web worker");
}
addEventListener("message",readdata,true);