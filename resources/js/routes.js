import AllBooks from './components/AllBooks';
import AddBook from './components/AddBook';
import EditBooks from './components/EditBook';
import Dashboard from './Dashboard';

export const routes = [{
        name: 'home',
        path: '/',
        component: AllBooks
    },
    {
        name: 'add',
        path: '/add',
        component: AddBook
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditBooks
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    }
];