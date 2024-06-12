import React from 'react';

const Welcome = ({ name }) => {
    return (
        <div>
            <h1>Welcome, {name}!</h1>
            <p>This is a React component rendered by Inertia.js</p>
        </div>
    );
};

export default Welcome;
