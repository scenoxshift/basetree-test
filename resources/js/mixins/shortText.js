export const shortTextMixin = {
    methods: {
        notificationShortText(notification) {
            let text = notification.data.post.title.substr(0, 30);
            
            if(notification.data.post.title.length > 30) text += '...';
            
            return text;
        }
    }
};