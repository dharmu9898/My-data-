// JScript File

function FixLeftPanel(){
    
    LP=document.getElementById("LeftPanel");
    MP=document.getElementById("MiddlePanel");
    RP=document.getElementById("RightPanel");
    CP=document.getElementById("ContactPanel");
    RBP=document.getElementById("RightBluePanel")
    
    TP=document.getElementById("RightBluePanel")
    if (LP && RP && MP){
        if(RP.clientHeight){
            LPHeight=LP.clientHeight + CP.clientHeight;
            MPHeight=MP.clientHeight;
            RPHeight=RP.clientHeight
            
            if (TP){//+210px for a static height panel named BluePanel
                RPHeight=RPHeight+TP.clientHeight;
            }
            var NewValue=FindMax(LPHeight,MPHeight,RPHeight);
            LP.style.height=NewValue-20+"px";
            MP.style.height=NewValue+"px";
            RP.style.height=NewValue+"px";
        }
    }
    
        CP.style.visibility='visible';
    if (RBP)
        RBP.style.visibility='visible';
}

function FindMax(a,b,c){
    var ret;
    if (a>b)
        ret=a;
    else
        ret=b;
    if (c>ret)
        ret=c;
    return ret;
}
function BookmarkUs(title,Link){
    if (window.sidebar){ 
        window.sidebar.addPanel(title, Link,''); 
    } else if( document.all ){
        window.external.AddFavorite( Link,title);
    }
}
