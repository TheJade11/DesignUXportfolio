console.log("Kikouyoutube");
//React
//ReactDOM
class likeButton extends React.Component{
    constructor(props){
        super(props)

        this.state= {
            likes:props.likes || 0,
            isLiked:props.isLiked || false
        };
    }
    render() {
       return React.createElement(
           "button", { className:'btn btn-link'},
       "J'aime!" );
    }
}
Document.querySelectorAll('span.react-like').forEach(function(span){
    ReactDOM.render(React.createElement(LikeButton),span);
});