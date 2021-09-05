import IndexComponent from './components/public/index.vue';
import ResumeComponent from './components/public/resume.vue';
import PortfolioComponent from './components/public/portfolio.vue';
import PortfolioDetailsComponent from './components/public/portfolio_details';
import BlogComponent from './components/public/blog.vue';
import ContactComponent from './components/public/contact.vue';


export const routes = [
    {
        path: '/',
        component: IndexComponent
    },
    {
        path: '/Resume',
        component: ResumeComponent
    },
    {
        path: '/Portfolio',
        component: PortfolioComponent
    },
    {
        path: '/Portfolio/Portfolio-details',
        component: PortfolioDetailsComponent
    },
    {
        path: '/Blog',
        component: BlogComponent
    },
    {
        path: '/Contact',
        component: ContactComponent
    }
]
