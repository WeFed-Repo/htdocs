bSubmitted = false;
linkClicked = false;

function setSubmitted(value)
{
    bSubmitted = value;
    return;
}

function getSubmitted()
{
    var bOldValue = bSubmitted;
    setSubmitted(true);
    return bOldValue;
}

function isAlreadySubmitted() {
	return bSubmitted;
}

function setLinkClicked(value)
{
    linkClicked = value;
    return;
}

function getLinkClicked()
{
    var lOldValue = linkClicked;
    setLinkClicked(true);
    return lOldValue;
}