function getNodeValue(obj,tag)
{
	return obj.getElementsByTagName(tag)[0].firstChild.nodeValue;
}