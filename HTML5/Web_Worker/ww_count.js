var i=0;
function timer()
{
	i++;
	postMessage(i);
	setTimeout("timer()",500);
}
timer();