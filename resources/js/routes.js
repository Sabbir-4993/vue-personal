import IndexComponent from './components/public/index.vue';
import ResumeComponent from './components/public/resume.vue';
import PortfolioComponent from './components/public/portfolio.vue';
import PortfolioDetailsComponent from './components/public/portfolio_details';
import BlogComponent from './components/public/blog.vue';
import ContactComponent from './components/public/contact.vue';


export const routes = [
    {
        name: '/',
        path: '/',
        component: IndexComponent
    },
    {
        name: '/Resume',
        path: '/Resume',
        component: ResumeComponent
    },
    {
        name: '/Portfolio',
        path: '/Portfolio',
        component: PortfolioComponent
    },
    {
        name: '/Portfolio/Portfolio-details',
        path: '/Portfolio/Portfolio-details',
        component: PortfolioDetailsComponent
    },
    {
        name: '/Blog',
        path: '/Blog',
        component: BlogComponent
    },
    {
        name: '/Contact',
        path: '/Contact',
        component: ContactComponent
    }
]
